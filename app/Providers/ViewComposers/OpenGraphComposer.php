<?php

namespace App\Providers\OpenGraphComposer;

use App\Models\OpenGraph;
use Illuminate\View\View;
class OpenGraphComposer
{
public function compose(View $view)
{
    $og_type = 'product';
    $og_title = 'Name of company, name of service';
    $og_url = '/';
    $og_image = '/img/no_company.png';
    $og_description = 'Description of service';
    $product_plural_title = 'Servicess';

$view->with('url', $_SERVER['REQUEST_URI'])
->with('og_type', $og_type)
->with('og_title', $og_title)
->with('og_url', $og_url)
->with('og_image', $og_image)
->with('og_description', $og_description)
->with('product_plural_title', $product_plural_title);
}
}

