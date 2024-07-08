<?php

use Botble\Menu\Models\Menu;
use Botble\Menu\Repositories\Interfaces\MenuInterface;
use Botble\Widget\AbstractWidget;
use Illuminate\Support\Collection;

class FooterMenuWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('FooterMenu'),
            'description' => __('Widget description'),
            'menu_slug' => null,
        ]);
    }

    protected function adminConfig(): array
    {
        return [
            'menus' => app(MenuInterface::class)->pluck('name', 'slug'),
        ];
    }

    protected function data(): array|Collection
    {
        return [
            'menus' => Menu::query()->get(),
        ];
    }
}
