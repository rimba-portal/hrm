<?php

namespace Rimba\Hrm\Http\UI\Admin\Resources\JobTitles;

use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JobTitleResource extends Resource
{
    protected static ?string $model = \Rimba\Hrm\Models\JobTitle::class;

    protected static string|UnitEnum|null $navigationGroup = 'Hrm';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-play';

    protected static ?int $navigationSort = 48;

    protected static ?string $recordTitleAttribute = 'title';

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
            'index' => \Rimba\Hrm\Http\UI\Admin\Resources\JobTitles\Pages\ListJobTitles::route('/'),
            // 'create' => \Rimba\Hrm\Http\UI\Admin\Resources\JobTitles\Pages\CreateJobTitle::route('/create'),
            // 'view' => \Rimba\Hrm\Http\UI\Admin\Resources\JobTitles\Pages\ViewJobTitle::route('/{record}'),
            // 'edit' => \Rimba\Hrm\Http\UI\Admin\Resources\JobTitles\Pages\EditJobTitle::route('/{record}/edit'),
            //
        ];
    }
}
