<div id="warranty-policy-page">
    <div class="section-banner-wrapper">
    @includeIf("theme.main::views.components.breadcrumb")
    <div class="container-customize">
        <div class="section-banner">
                <div class="theme-customize-header-section__header mt-n4">
                    <h1 class="theme-customize-header-section__header__title">
                        {!! __('General policies and regulations') !!}
                    </h1>
                </div>
                <div class="theme-customize-header-section__tabs">
                    <ul class="theme-customize-header-section__tabs__list mb-0">
                        <li class="__tabs__item  active">
                             <a class="__tabs__link" href="{!!$page->url!!}" target="_self" title="{!! $page->name !!}">
                                 {!! $page->name !!}
                             </a>
                         </li>
                    </ul>
                </div>
        </div>
    </div>
</div>

    @if(isset($page))
    @if(get_image_url($page->image))
        <div class="section-picture">
            <img width="1900" height="500" class="mw-100" src="{{ get_image_url($page->image) }}" alt="ảnh product" />
        </div>
    @endif

        <div class="section-collapse-wrapper">
            <div class="container-customize">
                <div class="section-collapse">
                    <div class="theme-customize-header-section__header distance-below">
                        <h2 class="theme-customize-header-section__header__title">
                            {{ $page->description ?? "" }}
                        </h2>
                        {!! $page->content ?? "" !!}
                    </div>
                    <div id="accordion">
                        @if(has_field($page, 'another_field_policy'))
                            @foreach (get_field($page, 'another_field_policy') as $key => $item)
                                <div class="outer-shell">
                                    <div class="card">
                                        <div class="card-header" id="heading_{{ $key }}">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_{{ $key }}" aria-expanded="true" aria-controls="collapse_{{ $key }}" type="button">
                                                    {{ has_sub_field($item, 'tieu_de_policy') ? get_sub_field($item, 'tieu_de_policy') : '' }}
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse_{{ $key }}" class="collapse" aria-labelledby="heading_{{ $key }}" data-parent="#accordion">
                                            <div class="card-body">
                                                {!! has_sub_field($item, 'mo_ta_policy') ? get_sub_field($item, 'mo_ta_policy') : '' !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
