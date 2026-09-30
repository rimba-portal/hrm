<?php

namespace Rimba\Hrm\Http\UI\Admin\Resources\Employees\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEmployees extends ListRecords
{
    protected static string $resource = \Rimba\Hrm\Http\UI\Admin\Resources\Employees\EmployeeResource::class;

    protected static ?string $title = 'Employee Directory';

    protected ?string $subheading = 'Look up baseline staff hiring records, employment status, and corporate references.';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
