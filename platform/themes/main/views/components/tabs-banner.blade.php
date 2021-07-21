<div class="section-banner-wrapper">
    @includeIf("theme.main::views.components.breadcrumb")
    <div class="container-customize">
        <div class="section-banner">
            <div class="theme-customize-header-section__header">
                <h1 class="theme-customize-header-section__header__title">
                    Tiên phong sản xuất <br>
                    Kính an toàn hàng đầu việt nam
                </h1>
            </div>
            <div class="theme-customize-header-section__tabs">
                <ul class="theme-customize-header-section__tabs__list mb-0">
                    {!!
                        Menu::renderMenuLocation('introduce-tabs', [
                            'options' => [],
                            'theme'   => true,
                            'view' => 'introduce-tabs',
                        ])
                    !!}
                </ul>
            </div>
        </div>
    </div>
</div>