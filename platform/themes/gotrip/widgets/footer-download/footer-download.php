<?php

use Botble\Widget\AbstractWidget;
use Illuminate\Support\Collection;

class FooterDownloadWidget extends AbstractWidget
{
    public function __construct()
    {
        parent::__construct([
            'name' => __('FooterDownload'),
            'description' => __('Widget description'),
        ]);
    }

    protected function data(): array|Collection
    {
        return [];
    }
}
