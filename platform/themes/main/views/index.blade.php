@php
    $page_introduce = get_page_by_template ('introduce');
@endphp

<div id="home-page">
    <div class="section-intro-wrapper">
        <div class="container-customize">
            <div class="section-intro distance-below">
                <div class="d-inline-block">
                    <h1 class="section-intro__title"> {!!has_field($page,'title_main')!!} </h1>
                    <ul class="info-contact mb-0">
                        @foreach(has_field($page, 'hotline_info') as $row)
                        <li class="info-contact__item">
                            <a class="info-contact__link" href="#" title="cskh">
                                <span> {{has_sub_field($row, 'title')}} </span>
                                <b> {{has_sub_field($row, 'content')}} </b>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="intro-slider">
            <div class="slider-bg">

            </div>
            <div class="container-customize pr-0">
                <div class="splide" id="section-intro__carousel">
                    <div class="splide__slider">
                        <!-- relative -->
                        <div class="splide__track">
                            <ul class="splide__list">
                                @foreach(has_field($page, 'banner_image') as $row)
                                <li class="splide__slide">
                                    <img alt=" ảnh slider" width="" height="" src="{{ RvMedia::getImageUrl(get_sub_field($row, 'image'))}}" />
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

    <div class="section-aboutus-wrapper">
        <div class="container-customize">
            <div class="section-aboutus theme-customize-header-section">
                <div class="theme-customize-header-section__header mb-3">
                    <h2 class="theme-customize-header-section__header__title"> Về chúng tôi </h2>
                    <p class="theme-customize-header-section__header__des">
                        @if($page_introduce)
                        {{$page_introduce->description}}
                        @endif
                    </p>
                </div>
                <p class="section-aboutus__line__des"> Thương hiệu được khẳng định bởi uy tín, chất lượng, tính an toàn và đặc biệt thân thiện với môi trường </p>
                <div class="section-aboutus__line__btn">
                    <a class="btn-read-more" href="#" title="Xem thêm">
                        Xem thêm
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section-ourproduct-wrapper">
        <div class="container-customize pl-md-0">
            <div class="section-ourproduct theme-customize-header-section">
                <div class="row">
                    <div class="col-md-4 col-12 order-md-1 order-2 pr-md-0">
                        <div class="section-ourproduct__left h-100">
                            <img class="w-100 h-100" width="" height="" src="{{Theme::asset()->url('images/home/0d3b6e82110be555bc1a.jpg')}}" alt="product" />
                        </div>
                    </div>

                    <div class="col-md-8 col-12 order-md-2 order-1 pl-md-0">
                        <div class="section-ourproduct__right h-100">
                            <div class="theme-customize-header-section__header __header mt-0 pt-0">
                                <h2 class="theme-customize-header-section__header__title __title mb-2"> Sản phẩm </h2>
                                <p class="theme-customize-header-section__header__des __des">
                                    Các sản phẩm Kính an toàn Hải Long đã và đang được sử dụng trong nhiều công trình trọng điểm của Quốc gia, trong các công trình lớn khang trang, hiện đại và được đông đảo khách hàng tin dùng.
                                </p>
                            </div>
                            <ul class="list-cate-pro">
                                <li class="list-cate-pro__item">
                                    <a class="list-cate-pro__item__link" href="/product-detail" title="Kính cường lực"> Kính cường lực </a>
                                </li>
                                <li class="list-cate-pro__item">
                                    <a class="list-cate-pro__item__link" href="/product-detail" title="Kính low -E"> Kính low -E </a>
                                </li>
                                <li class="list-cate-pro__item">
                                    <a class="list-cate-pro__item__link active" href="/product-detail" title="Kính dán an toàn"> Kính dán an toàn </a>
                                </li>
                                <li class="list-cate-pro__item">
                                    <a class="list-cate-pro__item__link" href="/product-detail" title="Kính rạn"> Kính rạn </a>
                                </li>
                                <li class="list-cate-pro__item">
                                    <a class="list-cate-pro__item__link" href="/product-detail" title="Kính hộp"> Kính hộp </a>
                                </li>
                                <li class="list-cate-pro__item">
                                    <a class="list-cate-pro__item__link" href="/product-detail" title="Kính phun cát"> Kính phun cát </a>
                                </li>
                                <li class="list-cate-pro__item">
                                    <a class="list-cate-pro__item__link" href="/product-detail" title="Kính màu trang trí"> Kính màu trang trí </a>
                                </li>
                                <li class="list-cate-pro__item">
                                    <a class="list-cate-pro__item__link" href="/product-detail" title="Kính ngăn cháy"> Kính ngăn cháy </a>
                                </li>
                                <li class="list-cate-pro__item">
                                    <a class="list-cate-pro__item__link" href="/product-detail" title="Kính uốn cong"> Kính uốn cong </a>
                                </li>
                                <li class="list-cate-pro__item">
                                    <a class="list-cate-pro__item__link" href="/product-detail" title="Rèm kính hộp"> Rèm kính hộp </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--css in file common.scss----->
    <div class="box-common-producecapacity-wrapper">
        <div class="container-customize">
            <div class="box-common-producecapacity distance-below theme-customize-header-section">
                <div class="theme-customize-header-section__header">
                    <h2 class="theme-customize-header-section__header__title"> Năng lực sản xuất </h2>
                </div>
                <ul class="box-common-producecapacity__list">
                    <li class="box-common-producecapacity__list__item">
                        <b class="title-parent"> Kính dán an toàn </b>
                        <p class="des-children"> 3.000.000 m2/năm, khả năng cung ứng 8.800 m2/ngày Kính cường lực </p>
                    </li>

                    <li class="box-common-producecapacity__list__item">
                        <b class="title-parent"> Kính cường lực </b>
                        <p class="des-children"> 3.290.000 m2/năm, khả năng cung ứng 9.400 m2/ngày Kính hộp </p>
                    </li>

                    <li class="box-common-producecapacity__list__item">
                        <b class="title-parent"> Kính hộp </b>
                        <p class="des-children"> 450.000 m2/năm, khả năng cung ứng 1.285 m2/ngày </p>
                    </li>

                    <li class="box-common-producecapacity__list__item">
                        <b class="title-parent"> Kính Ô tô </b>
                        <p class="des-children"> 360.000 tấn/năm, khả năng cung ứng 1000 tấn/ngày </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--end css in file common.scss----->

    <!--css in file common.scss----->
    <div class="box-common-many-col-wrapper">
        <div class="container-customize pr-lg-0">
            <div class="box-common-many-col theme-customize-header-section">
                <div class="row">
                    <div class="col-lg-6 pb-5">
                        <div class="theme-customize-header-section__header">
                            <h2 class="theme-customize-header-section__header__title">
                                Tại sao chọn Hailong Glass
                            </h2>
                            <p class="theme-customize-header-section__header__des">
                                Thương hiệu được khẳng định bởi uy tín, chất lượng, tính an toàn và đặc biệt thân thiện với môi trường.
                            </p>
                        </div>

                        <ul class="box-common-many-col__list mb-0">
                            <li class="box-common-many-col__list__item col-sm-6 col-12">
                                <b class="title-parent"> Kinh Nghiệm </b>
                                <p class="des-children"> Với gần 20 năm kinh nghiệm trong lĩnh vực sản xuất và gia công kinh, Hải Long là nói khởi nguồn của nền công nghiệp kinh an toàn tại Việt Nam </p>
                            </li>

                            <li class="box-common-many-col__list__item col-sm-6 col-12">
                                <b class="title-parent"> Chất Lượng </b>
                                <p class="des-children"> Các sản phẩm của kính an toàn Hải Long . tuân thủ nghiêm ngặt các tiêu chuẩn quản lý chất lượng ISO 9001: 2015 và IS0 14001:2015 trong từng công đoạn sản xuất cùng các tiêu chuẩn JIS, ANSI, EN.</p>
                            </li>

                            <li class="box-common-many-col__list__item col-sm-6 col-12">
                                <b class="title-parent"> Công Nghệ </b>
                                <p class="des-children"> Dây chuyền công nghệ hiện đại của Germany, với nguồn nguyên liệu của Công ty liên doanh Kinh nổi Việt Nam ( VFG) và kính nhập khẩu từ Mỹ, Thái Lan, Bi Indonesia... </p>
                            </li>

                            <li class="box-common-many-col__list__item col-sm-6 col-12">
                                <b class="title-parent"> Nhân Sự </b>
                                <p class="des-children"> Tất cả cán bộ công nhân viên của Hải Long được đào tạo bài bản về nội quy, quy trình sản xuất và sự chuyển giao công nghệ sản xuất tiên tiến cuả Tập đoàn NSG,ARC0N,Saint Gobain, AGC. </p>
                            </li>

                            <li class="box-common-many-col__list__item col-sm-6 col-12">
                                <b class="title-parent"> Vận Chuyển </b>
                                <p class="des-children"> Ngoài dây chuyền công nghệ, vận tải cũng được đầu tư mạnh để phục vụ khách hàng và công trình trên khắp cả nước. Giao hàng đúng tiến độ. </p>
                            </li>

                            <li class="box-common-many-col__list__item col-sm-6 col-12">
                                <b class="title-parent"> Cam Kết </b>
                                <p class="des-children"> Bảo hành sản phẩm kịp thời, chu đáo. Giá thành hợp lý.</p>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6">
                        <div class="box-common-many-col__picture mt-0 h-100" style="background-image: url({{Theme::asset()->url('images/home/1994cb478ece7a9023df.jpg')}}); background-size: cover; background-repeat: no-repeat;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end css in file common.scss----->

    <!--css in file common.scss----->
    <div class="box-common-showroom-wrapper">
        <div class="container-customize">
            <div class="box-common-showroom distance-below theme-customize-header-section">
                <div class="theme-customize-header-section__header">
                    <h2 class="theme-customize-header-section__header__title">
                        Showroom Hailong Glass
                    </h2>
                    <p class="theme-customize-header-section__header__des mb-4">
                        Danh sách Showroom Glass
                    </p>
                </div>

                <div class="box-common-showroom__content">
                    <div class="row">
                        <div class="col-lg-7 col-12">
                            <div class="box__tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item box__tabs__header" role="presentation">
                                        <button class="nav-link active px-0" id="col-tab1-tab" data-bs-toggle="tab" data-bs-target="#col-tab1" type="button" role="tab" aria-controls="col-tab1" aria-selected="true"> Miền Bắc </button>
                                    </li>

                                    <li class="nav-item box__tabs__header" role="presentation">
                                        <button class="nav-link px-0" id="col-tab2-tab" data-bs-toggle="tab" data-bs-target="#col-tab2" type="button" role="tab" aria-controls="col-tab2" aria-selected="true"> Miền Trung </button>
                                    </li>

                                    <li class="nav-item box__tabs__header" role="presentation">
                                        <button class="nav-link px-0" id="col-tab3-tab" data-bs-toggle="tab" data-bs-target="#col-tab3" type="button" role="tab" aria-controls="col-tab3" aria-selected="true"> Miền Nam </button>
                                    </li>
                                </ul>

                                <div class="tab-content box__tabs__content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="col-tab1" role="tabpanel" aria-labelledby="col-tab1-tab">
                                        <div class="line__item">
                                            <div>
                                                <b class="address"> 162 Hoàng Quốc Việt, Cầu Giấy, HN </b>
                                            </div>
                                            <div class="des-children">
                                                <span class="phone"> 024.22456666 / 024.85862988 </span>
                                            </div>
                                        </div>

                                        <div class="line__item">
                                            <div>
                                                <b class="address"> 381 Phố Mới - Tân Dương - Thủy Nguyên - Hải Phòng </b>
                                            </div>
                                            <div class="des-children">
                                                <span class="phone"> 024.35723838 / 024.22431063 </span>
                                            </div>
                                        </div>

                                        <div class="line__item">
                                            <div>
                                                <b class="address"> 369 Nguyễn Trãi, Thanh Xuân, HN </b>
                                            </div>
                                            <div class="des-children">
                                                <span class="phone"> 369 Nguyễn Trãi, Thanh Xuân, HN </span>
                                            </div>
                                        </div>

                                        <a class="btn-read-more small" href="#" title="Read more"> Xem thêm </a>
                                    </div>

                                    <div class="tab-pane fade" id="col-tab2" role="tabpanel" aria-labelledby="col-tab2-tab">
                                        <div class="line__item">
                                            <div>
                                                <b class="address"> 162 Hoàng Quốc Việt, Cầu Giấy, HN </b>
                                            </div>
                                            <div class="des-children">
                                                <span class="phone"> 024.22456666 / 024.85862988 </span>
                                            </div>
                                        </div>

                                        <div class="line__item">
                                            <div>
                                                <b class="address"> 381 Phố Mới - Tân Dương - Thủy Nguyên - Hải Phòng </b>
                                            </div>
                                            <div class="des-children">
                                                <span class="phone"> 024.35723838 / 024.22431063 </span>
                                            </div>
                                        </div>

                                        <div class="line__item">
                                            <div>
                                                <b class="address"> 369 Nguyễn Trãi, Thanh Xuân, HN </b>
                                            </div>
                                            <div class="des-children">
                                                <span class="phone"> 369 Nguyễn Trãi, Thanh Xuân, HN </span>
                                            </div>
                                        </div>

                                        <a class="btn-read-more" href="#" title="Read more"> Xem thêm </a>
                                    </div>

                                    <div class="tab-pane fade" id="col-tab3" role="tabpanel" aria-labelledby="col-tab3-tab">
                                        <div class="line__item">
                                            <div>
                                                <b class="address"> Duong Linh Trung, Quan Thu Duc, TPHCM </b>
                                            </div>
                                            <div class="des-children">
                                                <span class="phone"> 024.22456666 / 024.85862988 </span>
                                            </div>
                                        </div>

                                        <div class="line__item">
                                            <div>
                                                <b class="address"> 381 Phố Mới - Thủy Nguyên - Hải Phòng </b>
                                            </div>
                                            <div class="des-children">
                                                <span class="phone"> 024.35723838 / 024.22431063 </span>
                                            </div>
                                        </div>

                                        <div class="line__item">
                                            <div>
                                                <b class="address"> 369 Nguyễn Trãi, Thanh Xuân, HN </b>
                                            </div>
                                            <div class="des-children">
                                                <span class="phone"> 369 Nguyễn Trãi, Thanh Xuân, HN </span>
                                            </div>
                                        </div>

                                        <a class="btn-read-more" href="#" title="Read more"> Xem thêm </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="box__infoOther">
                                <div class="theme-customize-header-section__header pt-0">
                                    <h3 class="theme-customize-header-section__header__title text-white mb-2"> Nhà Máy </h3>
                                    <p class="box__infoOther__header__des des-children"> Thầy trò HLV Park Hang-seo sẽ mất lợi thế sân nhà nếu các đội khách không được ưu tiên miễn cách ly. </p>
                                </div>

                                <div class="box__infoOther__list">
                                    <div class="line__item">
                                        <div>
                                            <b class="address white"> 9 381 Phố Mới - Thủy Nguyên - Hải Phòng </b>
                                        </div>
                                        <div class="des-children">
                                            <span class="phone white"> 024.35723838 / 024.22431063 </span>
                                        </div>
                                    </div>

                                    <div class="line__item">
                                        <div>
                                            <b class="address white"> 1° 25 Nguyễn Văn Cừ - Hồng Hải - Hạ Long </b>
                                        </div>
                                        <div class="des-children">
                                            <span class="phone white"> 024.35723838 / 024.22431063 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end css in file common.scss----->

    <!--css in file common.scss----->
    <div class="box-common-typeicalproject-carousel-wrapper">
        <div class="container-customize">
            <div class="box-common-typeicalproject-carousel distance-below theme-customize-header-section">
                <div class="theme-customize-header-section__header distance-below">
                    <h2 class="theme-customize-header-section__header__title">
                        Dự án tiêu biểu
                    </h2>
                    <p class="theme-customize-header-section__header__des mb-0">
                        <span>
                            Theo doanh nghiệp này, ở thời đại mà nhất cử nhất động của mọi người đều công khai trên mạng xã hội, tính riêng tư được giới siêu giàu rất coi trọng.
                        </span>
                        <a class="btn-read-more" href="#" title="Read more"> Xem thêm </a>
                    </p>
                </div>

                <div class="splide" id="box-common-typeicalproject-carousel__carousel">
                    <div class="splide__slider">
                        <!-- relative -->
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="splide__slide__img">
                                        <a href="#" title="ảnh slider">
                                            <img width="" height="" src="{{Theme::asset()->url('images/home/pexels-photo.jpg')}}" alt="ảnh slider" />
                                        </a>
                                    </div>
                                    <div class="splide__slide__content">
                                        <h3 class="splide__slide__content__title">
                                            <a href="#" title="ảnh slider">
                                                Căn hộ cao cấp The Minaton Residence
                                            </a>
                                        </h3>
                                        <div class="splide__slide__des des-children"> Thiết kế cao cấp và tinh tế tại khu vực ngoài trời troi cua </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="splide__slide__img">
                                        <a href="#" title="ảnh slider">
                                            <img width="" height="" src="{{Theme::asset()->url('images/home/architecture-buildings-city-373965.jpg')}}" alt="ảnh slider" />
                                        </a>
                                    </div>
                                    <div class="splide__slide__content">
                                        <h3 class="splide__slide__content__title">
                                            <a href="#" title="ảnh slider">
                                                Căn hộ cao cấp The Minaton Residence
                                            </a>
                                        </h3>
                                        <div class="splide__slide__content__des des-children"> Thiết kế cao cấp và tinh tế tại khu vực ngoài trời troi cua </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="splide__slide__img">
                                        <img width="" height="" src="{{Theme::asset()->url('images/home/aircraft-airplane-blue-219014.jpg')}}" alt="ảnh slider" />
                                    </div>
                                    <div class="splide__slide__content">
                                        <h3 class="splide__slide__content__title">
                                            <a href="#" title="ảnh slider">
                                                Căn hộ cao cấp The Minaton Residence
                                            </a>
                                        </h3>
                                        <div class="splide__slide__content__des des-children"> Thiết kế cao cấp và tinh tế tại khu vực ngoài trời troi cua </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="splide__slide__img">
                                        <img width="" height="" src="{{Theme::asset()->url('images/home/architecture-buildings-city-373965.jpg')}}" alt="ảnh slider" />
                                    </div>
                                    <div class="splide__slide__content">
                                        <h3 class="splide__slide__content__title">
                                            <a href="#" title="ảnh slider">
                                                Căn hộ cao cấp The Minaton Residence
                                            </a>
                                        </h3>
                                        <div class="splide__slide__content__des des-children"> Thiết kế cao cấp và tinh tế tại khu vực ngoài trời troi cua </div>
                                    </div>
                                </li>
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
    <!--end css in file common.scss----->

    <div class="section-news-wrapper">
        <div class="container-customize">
            <div class="section-news distance-below theme-customize-header-section">
                <div class="theme-customize-header-section__header distance-below">
                    <h2 class="theme-customize-header-section__header__title">
                        Tin tức
                    </h2>
                    <p class="theme-customize-header-section__header__des">
                        <span>
                            Theo doanh nghiệp này, ở thời đại mà nhất cử nhất động của mọi người đều công khai trên mạng xã hội, tính riêng tư được giới siêu giàu rất coi trọng.
                        </span>
                        <a class="btn-read-more" href="#" title="Read more"> Xem thêm </a>
                    </p>
                </div>

                <div class="section-news__content _fsx20r16">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-core col-big">
                                <img width="" height="" class="col-core__img w-100" src="{{Theme::asset()->url('images/home/72e1b2f6447fb021e96e.jpg')}}" alt="ảnh home" />

                                <div class="col-core__content">
                                    <h3 class="col-core__content__title">
                                        <a href="#" title="Chương trình khuyến mãi Sản phẩm Rèm Kính Hộp"> Chương trình khuyến mãi Sản phẩm Rèm Kính Hộp </a>
                                    </h3>
                                    <div class="col-core__content__time">
                                        <span> 15:58 25/07/2021 </span>
                                    </div>
                                    <p class="col-core__content__des des-children">
                                        Theo doanh nghiệp này, ở thời đại mà nhất cử nhất động của mọi người đều công khai trên mạng xã hội, tính riêng tư được giới siêu giàu rất coi trọng.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-lg-0 mt-3">
                            <div class="box-news-main">
                                <div class="col-core col-flex-box">
                                    <div class="col-core__box__img">
                                        <a href="#" title="Chương trình khuyến mãi Sản phẩm Rèm Kính Hộp">
                                            <img width="" height="" class="col-core__img" src="{{Theme::asset()->url('images/home/0e864e83b70a43541a1b.jpg')}}" alt="ảnh home" />
                                        </a>
                                    </div>

                                    <div class="col-core__content">
                                        <h3 class="col-core__content__title">
                                            <a href="#" title="Chương trình khuyến mãi Sản phẩm Rèm Kính Hộp">
                                                Chương trình khuyến mãi Sản phẩm Rèm Kính Hộp
                                            </a>
                                        </h3>
                                        <div class="col-core__content__time">
                                            <span> 15:58 25/07/2021 </span>
                                        </div>
                                        <p class="col-core__content__des des-children">
                                            Theo doanh nghiệp này, ở thời đại mà nhất cử nhất động của mọi người đều công khai trên mạng xã hội, tính riêng tư được giới siêu giàu rất coi trọng.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-core col-flex-box">
                                    <div class="col-core__box__img">
                                        <a href="#" title="ảnh news">
                                            <img width="" height="" class="col-core__img" src="{{Theme::asset()->url('images/home/8da3ee9e1617e249bb06.jpg')}}" alt="ảnh home" />
                                        </a>
                                    </div>

                                    <div class="col-core__content">
                                        <h3 class="col-core__content__title">
                                            <a href="#" title="Chương trình khuyến mãi Sản phẩm Rèm Kính Hộp">
                                                Chương trình khuyến mãi Sản phẩm Rèm Kính Hộp
                                            </a>
                                        </h3>
                                        <div class="col-core__content__time">
                                            <span> 15:58 25/07/2021 </span>
                                        </div>
                                        <p class="col-core__content__des des-children">
                                            Theo doanh nghiệp này, ở thời đại mà nhất cử nhất động của mọi người đều công khai trên mạng xã hội, tính riêng tư được giới siêu giàu rất coi trọng.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .box-sub {
        display: none;
    }

    header {
        margin-top: 2rem;
    }

    .container-customize-header {
        max-width: 1920px;
        padding-left: 16% !important;
        padding-right: 16% !important;
    }

    @media (max-width: 1680px) {
        .container-customize-header {
            padding-left: 10% !important;
            padding-right: 10% !important;
        }
    }

    @media (max-width: 992px) {
        .container-customize-header {
            padding-left: 8% !important;
            padding-right: 8% !important;
        }
    }

    @media (max-width: 768px) {
        .container-customize-header {
            padding-left: 15px !important;
            padding-right: 15px !important;
        }
    }

    .bilingual {
        display: block !important;
    }

    @media (min-width: 992px) {
        .col-index-3 {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-index-9 {
            flex: 0 0 75%;
            max-width: 75%;
        }
    }

</style>

<script>
    $(document).ready(function() {
        new Splide('#section-intro__carousel', {
            heightRatio: 0.5625
            , cover: true
            , rewind: true
            , lazyLoad: 'sequential'
            , height: '35.625rem'
            , breakpoints: {
                '1680': {
                    height: '38.46153846153846rem'
                , }
                , '1200': {
                    height: '27.384615384615383rem'
                }
                , '992': {
                    height: '22.307692307692307rem'
                }
                , '576': {
                    height: '13.076923076923077rem'
                }
                , '360': {
                    height: '8.153846153846153rem'
                }
            }
        }).mount();


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
            }
        }).mount();
    })

</script>
