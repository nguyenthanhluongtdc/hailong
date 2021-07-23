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
                    {!! __('List of products') !!}
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

    <div class="section-shoppingguide-wrapper">
        <div class="container-customize pr-lg-0">
            <div class="section-shoppingguide row _fsx20r16">
                <div class="section-shoppingguide__picture order-md-2 col-lg-6 col-md-6 px-4 mt-lg-0" style="background-image: url({{Theme::asset()->url('images/products/image2.jpg')}}); background-size: cover; background-repeat: no-repeat;">
                </div>
                <div class="section-shoppingguide__content order-md-1 col-lg-6 col-md-6 px-4 distance-below">
                     <div class="theme-customize-header-section__header">
                        <h2 class="theme-customize-header-section__header__title">
                            Hướng dẫn mua hàng
                        </h2>
                        <p class="theme-customize-header-section__header__des mb-4">
                            Để sở hữu những sản phẩm kính đáp ứng các yêu cầu Tiêu chuẩn
                            Việt Nam ( TCVN ) và Tiêu chuẩn Nhật Bản JIS) quý khách có thể
                            thực hiện các bước sau
                        </p>
                    </div>

                    <p class="step">
                        <b> B1. </b>
                        <span>Quý khách có thể xem thông
                            tin chi tiết sản phẩm muốn </span>
                    </p>

                    <p class="step">
                        <b> B2. </b>
                        <span> Click vào nút
                            <a href="#" class="order" title="Đặt hàng"> Đặt hàng </a>
                        </span>
                    </p>

                    <p class="step">
                        <b> B1. </b>
                        <span> Điển chính xác thông tin
                            vào form hiển thị</span>
                    </p>

                    <p class="step">
                        <i class="fas fa-check-circle"></i>
                        <span> Sau khi quý khách hoàn thành những bước trên, chúng
                            tôi sẽ tiếp nhận đơn hàng, kiểm tra lại và xác nhận đơn
                            | hàng của Quý khách trước khi làm lệnh sản xuất. </span>
                    </p>
                </div>
            </div>
        </div>
    </div>

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