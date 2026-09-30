<?php

namespace Rimba\Hrm\Http\UI\Admin\Resources\Employees;

use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EmployeeResource extends Resource
{
    protected static ?string $model = \Rimba\Hrm\Models\Employee::class;

    protected static string|UnitEnum|null $navigationGroup = 'Hrm';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-play';

    protected static ?int $navigationSort = 47;

    protected static ?string $recordTitleAttribute = 'employee_no';

    public static function form(Schema $schema): Schema { return $schema->components([]); }

    public static function infolist(Schema $schema): Schema { return $schema->components([]); }

    public static function table(Table $table): Table { return $table->columns([]); }

    public static function getRelations(): array 
    { 
        return [ 
            // 
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => \Rimba\Hrm\Http\UI\Admin\Resources\Employees\Pages\ListEmployees::route('/'),
            // 'create' => \Rimba\Hrm\Http\UI\Admin\Resources\Employees\Pages\CreateEmployee::route('/create'),
            // 'view' => \Rimba\Hrm\Http\UI\Admin\Resources\Employees\Pages\ViewEmployee::route('/{record}'),
            // 'edit' => \Rimba\Hrm\Http\UI\Admin\Resources\Employees\Pages\EditEmployee::route('/{record}/edit'),
            //
        ];
    }
}
