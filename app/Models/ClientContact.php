<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientContact extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'client_contacts';

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
