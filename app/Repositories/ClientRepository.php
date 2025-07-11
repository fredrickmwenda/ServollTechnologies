<?php

namespace App\Repositories;

use App\Mail\CreateNewClientMail;
use App\Models\Client;
use App\Models\Country;
use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

/**
 * Class ClientRepository
 *
 * @version August 6, 2021, 10:17 am UTC
 */
class ClientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
    
        'company',
        'website',
        'address',
    ];

    /**
     * Return searchable fields
     */
    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model(): string
    {
        return Client::class;
    }

    public function getData(): mixed
    {
        $data = Country::toBase()->pluck('name', 'id')->toArray();

        return $data;
    }

    public function store($input): bool
    {
        //info($input);
        try {
            DB::beginTransaction();
 
            if (isset($input['contact'])) {
                $checkUniqueness = checkContactUniqueness($input['contact'], $input['region_code']);
                if ($checkUniqueness) {
                    throw new UnprocessableEntityHttpException('Contact number already exists for another Client.');
                }
            }


            $client = Client::create($input);

            if (isset($input['profile']) && ! empty($input['profile'])) {
                $client->addMedia($input['profile'])->toMediaCollection(Client::ACCOUNT, config('app.media_disc'));
            }
            if ($input['avatar_remove'] == 1 && isset($input['avatar_remove']) && empty($input['profile'])) {
                $client->clearMediaCollection(Client::ACCOUNT);
                $client->media()->delete();
            }


            // if (isset($input['company'])) {
            //     $client->addMedia($input['profile'])->toMediaCollection(Client::ACCOUNT, config('app.media_disc'));
            // }
            // if ($input['avatar_remove'] == 1 && isset($input['avatar_remove']) && empty($input['profile'])) {
            //     $client->clearMediaCollection(Client::ACCOUNT);
            //     $client->media()->delete();
            // }
          
            DB::commit();

            return true;
        } catch (Exception $e) {
            info($e->getMessage());
            DB::rollBack();
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }

    public function updateClient(array $input, Client $client): bool
    {
        try {
            DB::beginTransaction();
            $user = $client->user;
            // if (isset($input['password']) && ! empty($input['password'])) {
            //     $input['password'] = Hash::make($input['password']);
            // } else {
            //     $input['password'] = $client->user->password;
            // }

            $user->update($input);
            $client->update($input);

            if (isset($input['profile']) && ! empty($input['profile'])) {
                $user->clearMediaCollection(User::PROFILE);
                $user->media()->delete();
                $user->addMedia($input['profile'])->toMediaCollection(User::PROFILE, config('app.media_disc'));
            }
            if ($input['avatar_remove'] == 1 && isset($input['avatar_remove']) && empty($input['profile'])) {
                $user->clearMediaCollection(User::PROFILE);
                $user->media()->delete();
            }

            DB::commit();

            return true;
        } catch (Exception $e) {
            DB::rollBack();
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }
}
