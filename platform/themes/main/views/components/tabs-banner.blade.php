<div class="section-banner-wrapper">
    @includeIf("theme.main::views.components.breadcrumb")
    <div class="container-customize">
        <div class="section-banner">
            <div class="theme-customize-header-section__header">
                <h1 class="theme-customize-header-section__header__title">
                    @if(isset($title)) {!! __("$title") !!} @endif
                </h1>
            </div>
            <div class="theme-customize-header-section__tabs">
                <ul class="theme-customize-header-section__tabs__list mb-0">
                    @if(isset($menu) && !empty($menu))
                        {!!
                            Menu::renderMenuLocation($menu, [
                                'options' => [],
                                'theme'   => true,
                                'view' => 'introduce-tabs',
                            ])
                        !!}
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>