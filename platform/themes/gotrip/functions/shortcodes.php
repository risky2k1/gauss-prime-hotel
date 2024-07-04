<?php

use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\ColorField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Theme\Supports\ThemeSupport;
use Botble\Shortcode\Facades\Shortcode;
use Botble\Shortcode\Compilers\Shortcode as ShortcodeCompiler;
use Botble\Theme\Facades\Theme;
use Botble\Shortcode\Forms\ShortcodeForm;
use Botble\Base\Forms\Fields\NumberField;

app()->booted(function () {
    ThemeSupport::registerGoogleMapsShortcode();
    ThemeSupport::registerYoutubeShortcode();

    Shortcode::register('banner', __('banner'), __('banner'),
        function (ShortcodeCompiler $shortcode) {
            return Theme::partial('shortcodes.homepage.banner');
        }
    );
    Shortcode::setAdminConfig('banner', function (array $attributes) {
        return ShortcodeForm::createFromArray($attributes)->withLazyLoading()
            ->add('title', TextField::class, TextFieldOption::make()->label(__('Title'))->toArray())
            ->add('subtitle', ColorField::class, [
                'label' => __('Background color'),
                'default_value' => '#ecf0f1',
            ]);
    });

    Shortcode::register('popular-destination', __('popular-destination'), __('popular-destination'),
        function (ShortcodeCompiler $shortcode) {
            return Theme::partial('shortcodes.homepage.popular-destination');
        }
    );
    Shortcode::setAdminConfig('popular-destination', function (array $attributes) {
        return ShortcodeForm::createFromArray($attributes)->withLazyLoading()
            ->add('title', TextField::class, TextFieldOption::make()->label(__('Title'))->toArray())
            ->add('subtitle', ColorField::class, [
                'label' => __('Background color'),
                'default_value' => '#ecf0f1',
            ]);
    });

    Shortcode::register('cta-card', __('cta-card'), __('cta-card'),
        function (ShortcodeCompiler $shortcode) {
            return Theme::partial('shortcodes.homepage.cta-card');
        }
    );
    Shortcode::setAdminConfig('cta-card', function (array $attributes) {
        return ShortcodeForm::createFromArray($attributes)->withLazyLoading()
            ->add('title', TextField::class, TextFieldOption::make()->label(__('Title'))->toArray())
            ->add('subtitle', ColorField::class, [
                'label' => __('Background color'),
                'default_value' => '#ecf0f1',
            ]);
    });

    Shortcode::register('recommend', __('recommend'), __('recommend'),
        function (ShortcodeCompiler $shortcode) {
            return Theme::partial('shortcodes.homepage.recommend');
        }
    );
    Shortcode::setAdminConfig('recommend', function (array $attributes) {
        return ShortcodeForm::createFromArray($attributes)->withLazyLoading()
            ->add('title', TextField::class, TextFieldOption::make()->label(__('Title'))->toArray())
            ->add('subtitle', ColorField::class, [
                'label' => __('Background color'),
                'default_value' => '#ecf0f1',
            ]);
    });

    Shortcode::register('features', __('features'), __('features'),
        function (ShortcodeCompiler $shortcode) {
            return Theme::partial('shortcodes.homepage.features');
        }
    );
    Shortcode::setAdminConfig('features', function (array $attributes) {
        return ShortcodeForm::createFromArray($attributes)->withLazyLoading()
            ->add('title', TextField::class, TextFieldOption::make()->label(__('Title'))->toArray())
            ->add('subtitle', ColorField::class, [
                'label' => __('Background color'),
                'default_value' => '#ecf0f1',
            ]);
    });

    Shortcode::register('testimonials', __('testimonials'), __('testimonials'),
        function (ShortcodeCompiler $shortcode) {
            return Theme::partial('shortcodes.homepage.testimonials');
        }
    );
    Shortcode::setAdminConfig('testimonials', function (array $attributes) {
        return ShortcodeForm::createFromArray($attributes)->withLazyLoading()
            ->add('title', TextField::class, TextFieldOption::make()->label(__('Title'))->toArray())
            ->add('subtitle', ColorField::class, [
                'label' => __('Background color'),
                'default_value' => '#ecf0f1',
            ]);
    });

    Shortcode::register('blog-card', __('blog-card'), __('blog-card'),
        function (ShortcodeCompiler $shortcode) {
            return Theme::partial('shortcodes.homepage.blog-card');
        }
    );
    Shortcode::setAdminConfig('blog-card', function (array $attributes) {
        return ShortcodeForm::createFromArray($attributes)->withLazyLoading()
            ->add('title', TextField::class, TextFieldOption::make()->label(__('Title'))->toArray())
            ->add('subtitle', ColorField::class, [
                'label' => __('Background color'),
                'default_value' => '#ecf0f1',
            ]);
    });

    Shortcode::register('filter-destination', __('filter-destination'), __('filter-destination'),
        function (ShortcodeCompiler $shortcode) {
            return Theme::partial('shortcodes.homepage.filter-destination');
        }
    );
    Shortcode::setAdminConfig('filter-destination', function (array $attributes) {
        return ShortcodeForm::createFromArray($attributes)->withLazyLoading()
            ->add('title', TextField::class, TextFieldOption::make()->label(__('Title'))->toArray())
            ->add('subtitle', ColorField::class, [
                'label' => __('Background color'),
                'default_value' => '#ecf0f1',
            ]);
    });

    Shortcode::register('newsletter', __('newsletter'), __('newsletter'),
        function (ShortcodeCompiler $shortcode) {
            return Theme::partial('shortcodes.homepage.newsletter');
        }
    );
    Shortcode::setAdminConfig('newsletter', function (array $attributes) {
        return ShortcodeForm::createFromArray($attributes)->withLazyLoading()
            ->add('title', TextField::class, TextFieldOption::make()->label(__('Title'))->toArray())
            ->add('subtitle', ColorField::class, [
                'label' => __('Background color'),
                'default_value' => '#ecf0f1',
            ]);
    });
});
