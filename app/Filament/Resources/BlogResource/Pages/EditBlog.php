<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Filament\Resources\BlogResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\BlogResource\Widgets\BlogOverview;



class EditBlog extends EditRecord
{
    protected static string $resource = BlogResource::class;

    protected function getFooterWidgets(): array
    {
        return [
            BlogOverview::class,
        ];
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
