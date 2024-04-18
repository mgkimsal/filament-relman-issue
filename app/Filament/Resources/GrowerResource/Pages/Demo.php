<?php

namespace App\Filament\Resources\GrowerResource\Pages;

use App\Filament\Resources\GrowerResource;
use Filament\Resources\Pages\Page;

class Demo extends Page
{
    protected static string $resource = GrowerResource::class;

    protected static string $view = 'filament.resources.grower-resource.pages.demo';
}
