<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"  data-x="html" data-x-toggle="html-overflow-hidden">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>

        <style>
            :root {
                --primary-color: {{ theme_option('primary_color', '#ff2b4a') }};
                --primary-font: '{{ theme_option('primary_font', 'Roboto') }}', sans-serif;
            }
        </style>
        @php Theme::set('headerMeta', Theme::partial('header-meta')) @endphp
        {!! Theme::header() !!}
    </head>
    <body>
        <main>
            <header data-add-bg="bg-dark-1" class="header bg-green js-header" data-x="header" data-x-toggle="is-menu-opened">
                <div data-anim="fade" class="header__container px-30 sm:px-20">
                    <div class="row justify-between items-center">

                        <div class="col-auto">
                            <div class="d-flex items-center">
                                <a href="index.html" class="header-logo mr-20" data-x="header-logo" data-x-toggle="is-logo-dark">
                                    <img src="{{ Theme::asset()->url('img/general/logo-light.svg') }}" alt="logo icon">
                                    <img src="{{ Theme::asset()->url('img/general/logo-dark.svg') }}" alt="logo icon">
                                </a>


                                <div class="header-menu " data-x="mobile-menu" data-x-toggle="is-menu-active">
                                    <div class="mobile-overlay"></div>

                                    <div class="header-menu__content">
                                        <div class="mobile-bg js-mobile-bg"></div>

                                        <div class="menu js-navList">
                                            {!!
                                                Menu::renderMenuLocation('main-menu', [
                                                    'options' => ['class="menu__nav text-white -is-active"'],
                                                    'theme' => true,
                                                    'view' => 'menu.main-menu',
                                                ])
                                            !!}
                                        </div>

                                        <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="col-auto">
                            <div class="d-flex items-center">

                                <div class="row x-gap-20 items-center xxl:d-none">
                                    <div class="col-auto">
                                        <button class="d-flex items-center text-14 text-white" data-x-click="currency">
                                            <span class="js-currencyMenu-mainTitle">USD</span>
                                            <i class="icon-chevron-sm-down text-7 ml-10"></i>
                                        </button>
                                    </div>

                                    <div class="col-auto">
                                        <div class="w-1 h-20 bg-white-20"></div>
                                    </div>

                                    <div class="col-auto">
                                        {!! apply_filters('language_switcher') !!}
                                    </div>
                                </div>


                                <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">
                                    <a href="login.html" class="button px-30 fw-400 text-14 -white bg-white h-50 text-dark-1">Become An Expert</a>
                                    <a href="signup.html" class="button px-30 fw-400 text-14 border-white -outline-white h-50 text-white ml-20">Sign In / Register</a>
                                </div>

                                <div class="d-none xl:d-flex x-gap-20 items-center pl-30 text-white" data-x="header-mobile-icons" data-x-toggle="text-white">
                                    <div><a href="login.html" class="d-flex items-center icon-user text-inherit text-22"></a></div>
                                    <div>
                                        <button class="d-flex items-center icon-menu text-inherit text-20" data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </header>
