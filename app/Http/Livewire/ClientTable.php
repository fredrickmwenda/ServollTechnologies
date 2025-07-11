<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ClientTable extends LivewireTableComponent
{
    protected $model = Client::class;

    protected string $tableName = 'clients';

    // for table header button
    public $showButtonOnHeader = true;

    public $buttonComponent = 'clients.components.add-button';

    protected $listeners = ['refreshDatatable' => '$refresh'];


    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('created_at', 'desc');
        $this->setQueryStringStatus(false);

        $this->setThAttributes(function (Column $column) {
            if ($column->getField() == 'id') {
                return [
                    'style' => 'width:9%;text-align:center',
                ];
            }

            return [];
        });

        $this->setTdAttributes(function (Column $column, $row, $columnIndex, $rowIndex) {
            if ($column->getField() === 'first_name') {
                return [
                    'class' => 'w-75',
                ];
            }

            return [];
        });
    }

    public function columns(): array
    {
        return [
            Column::make(__('messages.client.client'), 'first_name')
                ->searchable(function (Builder $query, $direction) {
                    $query->whereRaw("TRIM(CONCAT(first_name,' ',last_name,' ')) like '%{$direction}%'");
                })
                ->sortable()
                ->view('clients.components.full_name'),
            Column::make('email', 'email')
                ->searchable()
                ->hideIf(1),
            Column::make(__('messages.common.invoice'), 'website')
                ->sortable()
                ->searchable()
                ->view('clients.components.invoice-count'),
            Column::make(__('messages.common.action'), 'id')
                ->format(function ($value, $row, Column $column) {
                    return view('livewire.action-button')->with([
                        'showRoute' => route('clients.show', $row->id),  // Add the route for showing client details
                        'editRoute' => route('clients.edit', $row->id),
                        'dataId' => $row->id,
                        'editClass' => 'client-edit-btn',
                        'deleteClass' => 'client-delete-btn',
                    ]);
                }),
        ];
    }

    public function builder(): Builder
    {
        $query = Client::with(['user.media'])->withCount('invoices');
        
        // Log the raw SQL query (with placeholders)
        info($query->toSql());
        
        // Log the query bindings (actual values to be injected into the placeholders)
        info($query->getBindings());
    
        return $query;
    }
    

    public function resetPageTable()
    {
        $this->customResetPage('clientsPage');
    }
}
