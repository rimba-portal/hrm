<?php

declare(strict_types=1);

namespace Rimba\Hrm\Http\UI\Admin\Resources\JobTitles\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Rimba\Hrm\Http\UI\Admin\Resources\JobTitles\JobTitleResource;

class ListJobTitles extends ListRecords
{
    protected static string $resource = JobTitleResource::class;

    protected static ?string $title = 'Job Titles & Grades';

    protected ?string $subheading = 'Catalog standard structural job designations, grades, and code frameworks.';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
