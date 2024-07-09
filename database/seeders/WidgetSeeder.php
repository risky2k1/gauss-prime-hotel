<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Widget\Database\Traits\HasWidgetSeeder;
use Botble\Widget\Widgets\CoreSimpleMenu;

class WidgetSeeder extends BaseSeeder
{
    use HasWidgetSeeder;

    public function run(): void
    {
        $data = [
            [
                'widget_id' => 'FooterContactWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 0,
                'data' => [
                    'id' => 'FooterContactWidget',
                    'name' => 'FooterContact',
                ],
            ],
            [
                'widget_id' => 'FooterMenuWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 1,
                'data' => [
                    'id' => 'FooterMenuWidget',
                    'name' => 'FooterMenu',
                    'menu_slug' => 'footer-pages-menu',
                ],
            ],
            [
                'widget_id' => 'FooterMenuWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 1,
                'data' => [
                    'id' => 'FooterMenuWidget',
                    'name' => 'FooterMenu',
                    'menu_slug' => 'footer-pages-menu',
                ],
            ],
            [
                'widget_id' => 'FooterMenuWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 2,
                'data' => [
                    'id' => 'FooterMenuWidget',
                    'name' => 'FooterMenu',
                    'menu_slug' => 'footer-service-pages-menu',
                ],
            ],
            [
                'widget_id' => 'FooterMenuWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 3,
                'data' => [
                    'id' => 'FooterMenuWidget',
                    'name' => 'FooterMenu',
                    'menu_slug' => 'footer-support-pages-menu',
                ],
            ],
            [
                'widget_id' => 'FooterDownloadWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 4,
                'data' => [
                    'id' => 'FooterDownloadWidget',
                    'name' => 'FooterDownload',
                ],
            ],
        ];

        $this->createWidgets($data);
    }
}
