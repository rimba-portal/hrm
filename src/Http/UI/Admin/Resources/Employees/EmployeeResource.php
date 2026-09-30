<?php

declare(strict_types=1);

namespace Rimba\Hrm\Http\UI\Admin\Resources\Employees;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Rimba\Hrm\Http\UI\Admin\Resources\Employees\Pages\ListEmployees;
use Rimba\Hrm\Models\Employee;
use UnitEnum;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static string|UnitEnum|null $navigationGroup = 'Hrm';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-play';

    protected static ?int $navigationSort = 47;

    protected static ?string $recordTitleAttribute = 'employee_no';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema->components([]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEmployees::route('/'),
            // 'create' => \Rimba\Hrm\Http\UI\Admin\Resources\Employees\Pages\CreateEmployee::route('/create'),
            // 'view' => \Rimba\Hrm\Http\UI\Admin\Resources\Employees\Pages\ViewEmployee::route('/{record}'),
            // 'edit' => \Rimba\Hrm\Http\UI\Admin\Resources\Employees\Pages\EditEmployee::route('/{record}/edit'),
            //
        ];
    }
}
