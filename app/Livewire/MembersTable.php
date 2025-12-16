<?php

namespace App\Livewire;

use App\Models\Member;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use Illuminate\View\View; 


final class MembersTable extends PowerGridComponent
{
    public string $tableName = 'members-table-p7voxe-table';
    public bool $deferLoading = true;

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            PowerGrid::header()
                ->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
            
        ];
    }

    public function datasource(): Builder
    {
        return Member::query()->with('ministries', 'status');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('first_name')
            ->add('last_name')
            ->add('gender_id')
            ->add('situation_id')
            ->add('ministries_names', fn(Member $model) => 
                    $model->ministries->pluck('name')->join(',')
                )
            ->add('birth_date_formatted', fn (Member $model) => Carbon::parse($model->birth_date)->format('d/m/Y'))
            ->add('membership_start_formatted', fn (Member $model) => Carbon::parse($model->membership_start)->format('d/m/Y'))
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->sortable()
                ->searchable(),
            Column::make('Nome', 'first_name')
                ->sortable()
                ->searchable(),

            Column::make('Sobrenome', 'last_name')
                ->sortable()
                ->searchable(),

            Column::make('Situation id', 'situation_id')
                ->hidden($isHidden = true),

            Column::make('ministérios', 'ministries_names'),

            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
            Filter::datepicker('birth_date'),
            Filter::datepicker('membership_start'),
        ];
    }

    public function noDataLabel(): string|View
    { 
        return view('data-table.notFound');
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert('.$rowId.')');
    }

    public function actions(Member $row): array
    {
        return [
            Button::add('edit')
                ->slot('<i class="bi bi-pencil-square text-blue-400"></i>')
                ->id()
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                ->dispatch('edit', ['rowId' => $row->id])
        ];
    }

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
