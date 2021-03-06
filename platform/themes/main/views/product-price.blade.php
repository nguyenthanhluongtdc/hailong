<div id="product-price-page">

    @includeIf("theme.main::views.components.tabs-banner",['title'=> 'Title Product','menu'=>'products-menu'])

    @if(isset($page))
    <div class="box-common-intro-wrapper">
        <div class="container-customize pr-md-0">
            <div class="box-common-intro theme-customize-header-section _fsx20r16">
                <div class="row position-relative">
                    <div class="col-md-6 col-12 order-md-2 mt-lg-5 mt-4 absolute box-common-intro__picture" style="background-image: url({{ get_image_url($page->image) }}); background-size: cover; background-repeat: no-repeat;" data-aos="flip-right"></div>
                    <div class="col-md-6 col-12 order-md-1">
                        <div class="box-common-intro__content distance-y">
                            <div class="theme-customize-header-section__header pt-0">
                                <h2 class="theme-customize-header-section__header__title" data-aos="fade-right">
                                    {{ $page->description ?? "" }}
                                </h2>
                            </div>

                            <div data-aos="fade-up">
                            {!! $page->content !!}
                            </div>

                            @if(has_field($page, 'hotline_product_price'))
                            <a class="hotline" href="tel:{{ get_field($page, 'hotline_product_price') }}" title="{{ __("Hotline") }}" data-aos="fade-up">
                                <span> {{ __("Hotline") }}: </span> <b> {{ get_field($page, 'hotline_product_price') }} </b>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="section-products-list-cate-pro-wrapper bg-f3 price-notification">
        <div class="container-customize">
            <div class="theme-customize-header-section__header">
                <h2 class="theme-customize-header-section__header__title" data-aos="fade-right">
                    {!! __('Products need price notification') !!}
                </h2>
            </div>
            <ul class="section-products-list-cate-pro distance-below">
                @if(!empty(get_price_notification_products([], theme_option('number_of_products_per_page'))))
                    @foreach(get_price_notification_products([], theme_option('number_of_products_per_page')) as $key => $product)
                    @php
                    $slug = \Illuminate\Support\Str::slug( $product->name?$product->name:'product'.$key).'-key'.$key;
                    @endphp
                <li class="section-products-list-cate-pro__item">
                    <button class="section-products-list-cate-pro__item__link bg-transparent border-0 outline-0" href="{{$product->url}}" title="{!! $product->name !!}" data-toggle="modal" data-target="#{{$slug}}" data-aos="{{$key%2==0?'fade-right':'fade-left'}}"> {!! $product->name !!} </button>

                    <div class="modal fade" id="{{$slug}}" role="dialog" aria-labelledby="{{$slug}}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="fal fa-times"></i>
                                    </button>
                                </div>
                                <div class="modal-header">
                                    <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle"> {!! $product->name !!} </h5>
                                </div>
                                <div class="modal-body p-0">
                                    @if(has_field($product, 'content_module_price_notification_page_product_detail'))
                                        {!! has_field($product, 'content_module_price_notification_page_product_detail') !!}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
                @endif
            </ul>
        </div>
    </div>

    {!! do_shortcode('[our-policy][/our-policy]') !!}
</div>
