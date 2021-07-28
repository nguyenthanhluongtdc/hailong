<div id="warranty-policy-page">
    @includeIf("theme.main::views.components.tabs-banner",['title'=> 'Title Product','menu'=>'products-menu'])

    @if(isset($page))
        <div class="section-picture" data-aos="flip-right">
            <img width="1900" height="500" class="mw-100" src="{{ get_image_url($page->image) }}" alt="ảnh product" />
        </div>

        <div class="section-collapse-wrapper">
            <div class="container-customize">
                <div class="section-collapse">
                    <div class="theme-customize-header-section__header distance-below">
                        <h2 class="theme-customize-header-section__header__title" data-aos="fade-right">
                            {{ $page->description ?? "" }}
                        </h2>
                        <div data-aos="fade-left">
                            {!! $page->content ?? "" !!}
                        </div>
                    </div>
                    <div id="accordion">
                        @if(has_field($page, 'another_field_policy'))
                            @foreach (get_field($page, 'another_field_policy') as $key => $item)
                                <div class="outer-shell" data-aos="{{$key%2==0?'fade-right':'fade-left'}}" data-aos-delay="200">
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
