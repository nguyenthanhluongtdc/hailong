@php
    $page = get_page_by_id(theme_option('products_id'));
@endphp

@if($page!=null)
<div class="section-shoppingguide-wrapper">
    <div class="container-customize pr-lg-0">
        <div class="section-shoppingguide row _fsx20r16">
            <div class="section-shoppingguide__picture order-md-2 col-lg-6 col-md-6 px-4 mt-lg-0" style="background-image: url({{rvMedia::getImageUrl(get_field($page, 'image_shopping_guide'))}}); background-size: cover; background-repeat: no-repeat;" data-aos="flip-left">
            </div>
            <div class="section-shoppingguide__content order-md-1 col-lg-6 col-md-6 px-4 distance-below">
                <div class="theme-customize-header-section__header">
                    <h2 class="theme-customize-header-section__header__title" data-aos="fade-right">
                        @if(has_field($page, 'title_shopping_guide'))
                            {!! has_field($page, 'title_shopping_guide') !!}
                        @endif
                    </h2>
                    <div class="theme-customize-header-section__header__des mb-4" data-aos="fade-left">
                        @if(has_field($page, 'description_shopping_guide'))
                            {!! has_field($page, 'description_shopping_guide') !!}
                        @endif
                    </div>
                </div>

                @if(has_field($page, 'step_shopping_guide'))
                    @foreach(has_field($page, 'step_shopping_guide') as $key => $step)
                        @if(has_sub_field($step, 'description'))
                            <p class="step">
                                <b data-aos="fade-right" data-aos-delay={{$key*300}}> B{{$key + 1}}. </b>
                                <span data-aos="fade-left" data-aos-delay={{$key*300}}>
                                    {!! has_sub_field($step, 'description') !!}
                                </span>
                            </p>
                        @endif
                    @endforeach
                @endif

                @if(has_field($page, 'commit_shopping_guide'))
                    <div class="step">
                        <i class="fas fa-check-circle" data-aos="fade-right" data-aos-delay="900"></i>
                        <span data-aos="fade-left" data-aos-delay="900">
                            {!! has_field($page, 'commit_shopping_guide') !!}
                        </span>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endif
