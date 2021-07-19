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
                        @if(!empty($introduces)) 
                            @foreach($introduces as $introduce)
                                <li class="__tabs__item {{$introduce->id == $page->id ? 'active':''}}">
                                    <a class="__tabs__link" href="{{$introduce->url}}" title="Tổng quan Hailong Glass"> 
                                        {{$introduce->name}}
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>