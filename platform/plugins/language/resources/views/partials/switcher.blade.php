@php
    $supportedLocales = Language::getSupportedLocales();
    if (!isset($options) || empty($options)) {
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
        $showRelated = setting('language_show_default_item_if_current_version_not_existed', true);
    @endphp
    <li class="bilingual {{ Arr::get($options, 'class') }}">
        @foreach ($supportedLocales as $localeCode => $properties)
            <a
                class="text-uppercase {{ $localeCode }} {{ $localeCode == Language::getCurrentLocale() ? 'active' : '' }}"
                rel="alternate"
                hreflang="{{ $localeCode }}"
                href="{{ $showRelated ? Language::getLocalizedURL($localeCode) : url($localeCode) }}"
                title="{{ $localeCode }}"
            >{{ $localeCode }}</a>
        @endforeach
    </li>
@endif