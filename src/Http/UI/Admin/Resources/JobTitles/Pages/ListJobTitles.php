<?php

namespace Rimba\Hrm\Http\UI\Admin\Resources\JobTitles\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJobTitles extends ListRecords
{
    protected static string $resource = \Rimba\Hrm\Http\UI\Admin\Resources\JobTitles\JobTitleResource::class;

    protected static ?string $title = 'Job Titles & Grades';

    protected ?string $subheading = 'Catalog standard structural job designations, grades, and code frameworks.';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
