<div class="section-banner-wrapper">
    @includeIf("theme.main::views.components.breadcrumb")
    <div class="container-customize">
        <div class="section-banner">
            @if(isset($title))
                <div class="theme-customize-header-section__header mt-n4">
                    <h1 class="theme-customize-header-section__header__title" data-aos="fade-down">
                        {!! __($title) !!}
                    </h1>
                </div>
            @endif

            @if(isset($menu) && !empty($menu))
                <div class="theme-customize-header-section__tabs">
                    <ul class="theme-customize-header-section__tabs__list mb-0">

                            {!!
                                Menu::renderMenuLocation($menu, [
                                    'options' => [],
                                    'theme'   => true,
                                    'view' => 'introduce-tabs',
                                ])
                            !!}

                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>