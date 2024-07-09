<?php

use Botble\Media\Facades\RvMedia;
use Botble\Theme\Supports\ThemeSupport;


app()->booted(function () {
    ThemeSupport::registerSocialLinks();
    ThemeSupport::registerToastNotification();
    ThemeSupport::registerSiteCopyright();
    ThemeSupport::registerLazyLoadImages();
    ThemeSupport::registerDateFormatOption();

    register_page_template([
        'default' => 'Default',
    ]);

    register_sidebar([
        'id' => 'footer_sidebar',
        'name' => 'Footer sidebar',
        'description' => 'This is a footer sidebar for gotrip theme',
    ]);

    RvMedia::setUploadPathAndURLToPublic();
});

