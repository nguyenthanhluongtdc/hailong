<div id="product-details-page">
   @includeIf("theme.main::views.components.tabs-banner",['title'=> 'Title Product-Detail','menu'=>'products-menu'])

    <div class="section-product-info-wrapper">
        <div class="container-customize pr-md-0">
            <div class="section-product-info">
                <div class="row">
                    <div class="col-md-5 distance-below">
                        <div class="box-content">
                            <div class="theme-customize-header-section__header">
                                <h2 class="theme-customize-header-section__header__title">
                                    {!! $product->name !!}
                                </h2>
                                <p class="theme-customize-header-section__header__des">
                                    {!! $product->description !!}
                                </p>
                            </div>

                            <div class="line-border">

                            </div>

                            <div class="box-content__bottom _fsx20r16">
                                <div class="__bottom__line__one"> {!! __('General characteristics') !!} </div>
                                <div class="__bottom__line__two"> {!! __('Production process') !!} </div>

                                <div class="box__btn">
                                    <button class="btn-order mb-2" data-target="#orderModal" data-toggle="modal"><i class="fal fa-shopping-cart"></i> {!! __('Order') !!} </button>
                                    <button class="btn-quote"><i class="fal fa-door-open"></i> {!! __('Quote') !!} </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 mt-xl-5 mt-4">
                        <div class="box-picture h-100 d-md-block d-none" style="background-image: url({{rvMedia::getImageUrl($product->image)}}); background-size: cover; background-repeat: no-repeat;">
                        </div>

                        <img class="mw-100 mt-md-0 mt-n2 d-md-none d-block" src="{{rvMedia::getImageUrl($product->image)}}" alt="" width="750" height="500">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-product-more-info-wrapper distance-y">
        <div class="container-customize">
            <div class="section-product-more-info">
                <div class="section-our-policy-wrapper">
                    <div class="section-our-policy distance-y">
                        <div class="row mx-lg-n5 mx-n3">
                            <div class="col-sm-4 px-lg-5 px-3">
                                <div class="section-our-policy__col">
                                    <div class="section-our-policy__col__icon">
                                        <i class="fad fa-truck-moving"></i>
                                    </div>
                                    <div class="section-our-policy__col__content">
                                        <h3 class="__content__title"> Miễn phí vận chuyển </h3>
                                        <p class="__content__des"> trong nội thành các thành phố có văn phòng ở công ty </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 px-lg-5 px-3">
                                <div class="section-our-policy__col">
                                    <div class="section-our-policy__col__icon">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <div class="section-our-policy__col__content">
                                        <h3 class="__content__title"> Bảo hành uy tín </h3>
                                        <p class="__content__des"> Xử lý, thu hồi sản phẩm lỗi hỏng tại công trình. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 px-lg-5 px-3">
                                <div class="section-our-policy__col">
                                    <div class="section-our-policy__col__icon">
                                        <i class="fab fa-chrome"></i>
                                    </div>
                                    <div class="section-our-policy__col__content">
                                        <h3 class="__content__title"> Hệ thống quản lý tối ưu </h3>
                                        <p class="__content__des"> Xử lý, thu hồi sản phẩm lỗi hỏng tại công trình. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="more-info">
                    <div class="theme-customize-header-section__header">
                        <h2 class="theme-customize-header-section__header__title">
                            Đặc tính chung
                        </h2>
                       {!! $product->content !!}
                    </div>

                    <div class="row-picture distance-above">
                        <div class="splide" id="section-product-more-info__carousel">
                            <div class="splide__slider">
                                <!-- relative -->
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        @foreach ($productImages as $img)
                                        <li class="splide__slide">
                                            <img width="1400" height="750" src="{{ RvMedia::getImageUrl($img, 'product_detail') }}" data-zoom-image="{{ RvMedia::getImageUrl($img, 'product_detail') }}" alt="{{ $product->name }}" />
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div>
                                <!-- extra contents -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-procedure-wrapper">
        <div class="container-customize">
            <div class="section-procedure distance-below">
                <div class="row">
                    <div class="col-lg-10 col-md-9">
                        <div class="theme-customize-header-section__header">
                            <h2 class="theme-customize-header-section__header__title">
                                Quy trình sản xuất
                            </h2>
                        </div>
                        <div class="box__tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item box__tabs__header" role="presentation">
                                    <button class="nav-link active px-0" id="col-tab1-tab" data-bs-toggle="tab" data-bs-target="#col-tab1" type="button" role="tab" aria-controls="col-tab1" aria-selected="true"> Cắt kính </button>
                                </li>

                                <li class="nav-item box__tabs__header" role="presentation">
                                    <button class="nav-link px-0" id="col-tab2-tab" data-bs-toggle="tab" data-bs-target="#col-tab2" type="button" role="tab" aria-controls="col-tab2" aria-selected="true"> Mài kính </button>
                                </li>

                                <li class="nav-item box__tabs__header" role="presentation">
                                    <button class="nav-link px-0" id="col-tab3-tab" data-bs-toggle="tab" data-bs-target="#col-tab3" type="button" role="tab" aria-controls="col-tab3" aria-selected="true"> Khoan, khoét và rửa kính </button>
                                </li>

                                <li class="nav-item box__tabs__header" role="presentation">
                                    <button class="nav-link px-0" id="col-tab4-tab" data-bs-toggle="tab" data-bs-target="#col-tab4" type="button" role="tab" aria-controls="col-tab4" aria-selected="true"> Công đoạn tôi kính </button>
                                </li>
                            </ul>

                            <div class="tab-content box__tabs__content px-0" id="myTabContent">
                                <div class="tab-pane fade show active _fsx20r16" id="col-tab1" role="tabpanel" aria-labelledby="col-tab1-tab">
                                    <p>
                                        Kính Cường Lực hiện nay được ứng dụng phổ biến trong cuộc
                                        sống chúng ta với nhiều đặc tính nổi bật vượt trội hơn so với
                                        những loại kính thông thường khác. Trong đó, việc sử dụng kinh
                                        cường lực đến từ thương hiệu Việt Nhật - Hải Long đem đến sự an
                                        toàn cho ngôi nhà của bạn mà vẫn đảm bảo được tính thẩm mỹ
                                        cao.
                                    </p>

                                    <div class="tab-picture mt-lg-5 mt-3">
                                        <img class="mw-100" src="{{Theme::asset()->url('/images/products/image7.jpg')}}" alt="ảnh-product" width="1110" height="500" />
                                    </div>
                                </div>

                                <div class="tab-pane fade px-0" id="col-tab2" role="tabpanel" aria-labelledby="col-tab2-tab">
                                    <p>
                                        Kính Cường Lực hiện nay được ứng dụng phổ biến trong cuộc
                                        sống chúng ta với nhiều đặc tính nổi bật vượt trội hơn so với
                                        những loại kính thông thường khác. Trong đó, việc sử dụng kinh
                                        cường lực đến từ thương hiệu Việt Nhật - Hải Long đem đến sự an
                                        toàn cho ngôi nhà của bạn mà vẫn đảm bảo được tính thẩm mỹ
                                        cao.
                                    </p>

                                    <div class="tab-picture mt-lg-5 mt-3">
                                        <img class="mw-100" src="{{Theme::asset()->url('/images/products/image7.jpg')}}" alt="ảnh-product" width="1110" height="500" />
                                    </div>
                                </div>

                                <div class="tab-pane fade px-0" id="col-tab3" role="tabpanel" aria-labelledby="col-tab3-tab">
                                    <p>
                                        Kính Cường Lực hiện nay được ứng dụng phổ biến trong cuộc
                                        sống chúng ta với nhiều đặc tính nổi bật vượt trội hơn so với
                                        những loại kính thông thường khác. Trong đó, việc sử dụng kinh
                                        cường lực đến từ thương hiệu Việt Nhật - Hải Long đem đến sự an
                                        toàn cho ngôi nhà của bạn mà vẫn đảm bảo được tính thẩm mỹ
                                        cao.
                                    </p>

                                    <div class="tab-picture mt-lg-5 mt-3">
                                        <img class="mw-100" src="{{Theme::asset()->url('/images/products/image7.jpg')}}" alt="ảnh-product" width="1110" height="500" />
                                    </div>
                                </div>

                                <div class="tab-pane fade px-0" id="col-tab4" role="tabpanel" aria-labelledby="col-tab3-tab">
                                    <p>
                                        Kính Cường Lực hiện nay được ứng dụng phổ biến trong cuộc
                                        sống chúng ta với nhiều đặc tính nổi bật vượt trội hơn so với
                                        những loại kính thông thường khác. Trong đó, việc sử dụng kinh
                                        cường lực đến từ thương hiệu Việt Nhật - Hải Long đem đến sự an
                                        toàn cho ngôi nhà của bạn mà vẫn đảm bảo được tính thẩm mỹ
                                        cao.
                                    </p>

                                    <div class="tab-picture mt-lg-5 mt-3">
                                        <img class="mw-100" src="{{Theme::asset()->url('/images/products/image7.jpg')}}" alt="ảnh-product" width="1110" height="500" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3">
                        <div class="box__btn">
                            <button class="btn-order mr-md-0 mb-2" data-target="#orderModal" data-toggle="modal"><i class="fal fa-shopping-cart"></i>{!! __('Order') !!} </button>
                            <button class="btn-quote"><i class="fal fa-door-open"></i> {!! __('Quote') !!} </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-other-product-wrapper">
        <div class="container-customize">
            <div class="section-other-product">
                <div class="theme-customize-header-section__header">
                    <h2 class="theme-customize-header-section__header__title">
                        Sản phẩm khác
                    </h2>
                </div>
                <ul class="section-products-list-cate-pro distance-below">
                    <li class="section-products-list-cate-pro__item">
                        <a class="section-products-list-cate-pro__item__link" href="/product-detail" title="Kính cường lực"> Kính cường lực </a>
                    </li>
                    <li class="section-products-list-cate-pro__item">
                        <a class="section-products-list-cate-pro__item__link" href="/product-detail" title="Kính low -E "> Kính low -E </a>
                    </li>
                    <li class="section-products-list-cate-pro__item">
                        <a class="section-products-list-cate-pro__item__link active" href="/product-detail" title="Kính dán an toàn"> Kính dán an toàn </a>
                    </li>
                    <li class="section-products-list-cate-pro__item">
                        <a class="section-products-list-cate-pro__item__link" href="/product-detail" title="Kính rạn"> Kính rạn </a>
                    </li>
                    <li class="section-products-list-cate-pro__item">
                        <a class="section-products-list-cate-pro__item__link" href="/product-detail" title="Kính hộp"> Kính hộp </a>
                    </li>
                    <li class="section-products-list-cate-pro__item">
                        <a class="section-products-list-cate-pro__item__link" href="/product-detail" title="Kính phun cát"> Kính phun cát </a>
                    </li>
                    <li class="section-products-list-cate-pro__item">
                        <a class="section-products-list-cate-pro__item__link" href="/product-detail" title="Kính màu trang trí"> Kính màu trang trí </a>
                    </li>
                    <li class="section-products-list-cate-pro__item">
                        <a class="section-products-list-cate-pro__item__link" href="/product-detail" title="Kính ngăn cháy"> Kính ngăn cháy </a>
                    </li>
                    <li class="section-products-list-cate-pro__item">
                        <a class="section-products-list-cate-pro__item__link" href="/product-detail" title="Kính uốn cong"> Kính uốn cong </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {!! do_shortcode('[shoppingguide][/shoppingguide]') !!}

    <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="row mr-md-0 position-relative">
                        <div class="col-md-5 col-12 col-left position" style="background-image: url({{Theme::asset()->url('/images/products/ordersucces.jpg')}}); background-repeat: no-repeat; background-size: cover;">

                        </div>

                        <div class="col-md-7 p-0 col-12 col-right pl-md-4">
                            <div class="modal-header border-bottom-0 pb-2">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fal fa-times"></i>
                                </button>
                            </div>
                            <div class="form-modal pl-md-3 pr-md-5 px-3 pb-4">
                                <div class="theme-customize-header-section__header pt-0">
                                    <h2 class="theme-customize-header-section__header__title mb-1 pb-0">
                                        {!! __('Order') !!}
                                    </h2>
                                    <p class="theme-customize-header-section__header__des mb-3">
                                        {!! __('Please fill in the information correctly') !!}
                                    </p>
                                </div>
                                <form action="#" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="recipient-name" placeholder="{!!__('Full name')!!}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="recipient-name" placeholder="{!!__('Phone number')!!}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="recipient-name" placeholder="Tinh/thanh">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="recipient-name" placeholder="Quan/huyen">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="recipient-name" placeholder="Phuong/xa">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="recipient-name" placeholder="Dia chi giao hang">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="recipient-name" placeholder="Kinh cuong luc">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control" id="recipient-name" placeholder="Upload ban ve">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="message-text" placeholder="Ghi chu kem theo"></textarea>
                                    </div>
                                    <div class="box__btn">
                                        <button class="btn-order" data-target="#successModal" data-toggle="modal"><i class="fal fa-shopping-cart"></i> {!!__('Order')!!} </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog mx-auto" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-md-6 position" style="background-image: url({{Theme::asset()->url('/images/products/ordersucces.jpg')}}); background-repeat: no-repeat; background-size: cover;">

                        </div>

                        <div class="col-md-6">
                            <div class="col-body p-3">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fal fa-times"></i>
                                </button>

                                <div class="col-content distance-y">
                                    <div class="icon-success mb-lg-5 mb-4">
                                        <i class="fal fa-check-circle"></i>
                                    </div>
                                    <div class="theme-customize-header-section__header pt-0">
                                        <h2 class="theme-customize-header-section__header__title mb-3 pb-0">
                                            Quý khách đặt hàng thành công
                                        </h2>
                                        <p class="theme-customize-header-section__header__des mb-3">
                                            Cảm ơn quý khách! <br>
                                            Chúng tôi sẽ tiếp nhận đơn hàng, kiểm tra lại và xác nhận đơn hàng của Quý khách trước khi làm lệnh sản xuất
                                        </p>
                                    </div>
                                    <a href="/products" title="xem thêm" class="read-more mt-4 d-inline-block"> Xem thêm sản phẩm </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        new Splide('#section-product-more-info__carousel', {
            heightRatio: 0.5625
            , cover: true
            , rewind: true
            , lazyLoad: 'sequential'
        }).mount();
    })

</script>
