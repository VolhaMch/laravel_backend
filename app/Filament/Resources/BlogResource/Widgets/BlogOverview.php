<?php

namespace App\Filament\Resources\BlogResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Model;

class BlogOverview extends Widget
{
    public ?Model $record = null;
    protected int | string | array $columnSpan = 'full';
    protected static string $view = 'filament.resources.blog-resource.widgets.blog-overview';
}
