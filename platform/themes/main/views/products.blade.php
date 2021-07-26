<div id="products-page">

    @includeIf("theme.main::views.components.tabs-banner",['title'=> 'Title Product','menu'=>'products-menu'])

    <div class="section-intro-wrapper">
        <div class="container-customize _fsx20r16">
            <p class="my-5">
                @if(has_field($page, 'description_module_introductory_page_products'))
                    {!! has_field($page, 'description_module_introductory_page_products') !!}
                @endif
            </p>
        </div>

        <div class="section-intro__picture">
            @if(has_field($page, 'image_module_introductory_page_products'))
                <img class="mw-100" width="1900" height="500" src="{{rvMedia::getImageUrl(has_field($page, 'image_module_introductory_page_products'))}}" alt="ảnh-product" />
            @endif
        </div>

        <div class="container-customize">
            <div class="theme-customize-header-section__header">
                <h2 class="theme-customize-header-section__header__title">
                    {{ __('List of products') }}
                </h2>
            </div>
            <ul class="section-products-list-cate-pro distance-below">
                @php $products = get_products([],theme_option('number_of_products_per_page')); @endphp
                @if(isset($products) && $products->count() >= 1)
                    @foreach($products as $product)
                        <li class="section-products-list-cate-pro__item">
                            <a class="section-products-list-cate-pro__item__link" href="{{$product->url}}" title="Kính cường lực"> {{$product->name}} </a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>

    {!! do_shortcode('[shoppingguide][/shoppingguide]') !!}

    <!--css in file common.scss----->
    @php echo generate_shortcode('typical-project') @endphp
    <!--end css in file common.scss----->
</div>


<script>
    $(document).ready(function() {

        new Splide('#box-common-typeicalproject-carousel__carousel', {
            perPage: 3
            , gap: 40
            , breakpoints: {
                '992': {
                    perPage: 2
                    , gap: '1rem'
                , }
                , '480': {
                    perPage: 1
                    , gap: '1rem'
                , }
            , }
        }).mount();
    })

</script>