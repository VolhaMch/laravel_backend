<?php

namespace App\Filament\Resources\OpenGraphResource\Pages;

use App\Filament\Resources\OpenGraphResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOpenGraphs extends ListRecords
{
    protected static string $resource = OpenGraphResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
