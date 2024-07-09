@php
    $supportedLocales = Language::getSupportedLocales();
    if (empty($options)) {
        $options = [
            'before' => '',
            'lang_flag' => true,
            'lang_name' => true,
            'class' => '',
            'after' => '',
        ];
    }
@endphp

@if ($supportedLocales && count($supportedLocales) > 1)
    @php
        $languageDisplay = setting('language_display', 'all');
    @endphp
    @if (setting('language_switcher_display', 'dropdown') == 'dropdown')
        <button class="d-flex items-center text-14 text-white" data-x-click="lang">
            @if (Arr::get($options, 'lang_flag', true) && ($languageDisplay == 'all' || $languageDisplay == 'flag'))
                {!! language_flag(Language::getCurrentLocaleFlag(), Language::getCurrentLocaleName()) !!}
            @endif
            @if (Arr::get($options, 'lang_name', true) && ($languageDisplay == 'all' || $languageDisplay == 'name'))
                <span class="js-language-mainTitle">{{ Language::getCurrentLocaleName() }}</span>
            @endif
            <i class="icon-chevron-sm-down text-7 ml-15"></i>
        </button>
    @else
        <ul class="language_bar_list {{ Arr::get($options, 'class') }}">
            @foreach ($supportedLocales as $localeCode => $properties)
                @if ($localeCode != Language::getCurrentLocale())
                    <li>
                        <a href="{{ Language::getSwitcherUrl($localeCode, $properties['lang_code']) }}">
                            @if (Arr::get($options, 'lang_flag', true) && ($languageDisplay == 'all' || $languageDisplay == 'flag'))
                                {!! language_flag($properties['lang_flag'], $properties['lang_name']) !!}
                            @endif
                            @if (Arr::get($options, 'lang_name', true) && ($languageDisplay == 'all' || $languageDisplay == 'name'))
                                <span>{{ $properties['lang_name'] }}</span>
                            @endif
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    @endif
@endif

<div class="langMenu is-hidden js-langMenu" data-x="lang" data-x-toggle="is-hidden">
    <div class="langMenu__bg" data-x-click="lang"></div>
    <div class="langMenu__content bg-white rounded-4">
        <div class="d-flex items-center justify-between px-30 py-20 sm:px-15 border-bottom-light">
            <div class="text-20 fw-500 lh-15">Select your language</div>
            <button class="pointer" data-x-click="lang">
                <i class="icon-close"></i>
            </button>
        </div>
        <div class="modalGrid px-30 py-30 sm:px-15 sm:py-15">
            @foreach ($supportedLocales as $localeCode => $properties)
                @if ($localeCode != Language::getCurrentLocale())
                    <div class="modalGrid__item js-item">
                        <a href="{{ Language::getSwitcherUrl($localeCode, $properties['lang_code']) }}">
                            <div class="py-10 px-15 sm:px-5 sm:py-5">
                                @if (Arr::get($options, 'lang_name', true) && ($languageDisplay == 'all' || $languageDisplay == 'name'))
                                    <div class="text-15 lh-15 fw-500 text-dark-1">{{ $properties['lang_name'] }}</div>
                                    <div class="text-14 lh-15 mt-5 js-title">{{ $properties['lang_locale'] }}</div>
                                @endif
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>

