<div id="company-info-page">
    <div class="section-banner-wrapper">
        @includeIf("theme.theme-customize::views.components.breadcrumb")
        <div class="container-customize">
            <div class="section-banner">
                <div class="theme-customize-header-section__header">
                    <h2 class="theme-customize-header-section__header__title">
                        Tiên phong sản xuất <br>
                        Kính an toàn hàng đầu việt nam
                    </h2>
                </div>

                <div class="theme-customize-header-section__tabs">
                    <ul class="theme-customize-header-section__tabs__list mb-0">
                        <li class="__tabs__item">
                            <a class="__tabs__link" href="/introduce" title="Tổng quan Hailong Glass"> Tổng quan Hailong Glass </a>
                        </li>

                        <li class="__tabs__item active">
                            <a class="__tabs__link" href="/company-info" title="Thông tin công ty"> Thông tin công ty </a>
                        </li>

                        <li class="__tabs__item">
                            <a class="__tabs__link" href="/profile" title="Hồ sơ năng lực"> Hồ sơ năng lực </a>
                        </li>

                        <li class="__tabs__item">
                            <a class="__tabs__link" href="/teachnological" title="Dây chuyền công nghệ"> Dây chuyền công nghệ </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--css in file common.scss----->
    <div class="box-common-intro-wrapper mt-5">
        <div class="container-customize pl-md-0">
            <div class="box-common-intro section-intro theme-customize-header-section">
                <div class="row">
                    <div class="col-md-5 col-12 order-2 mt-md-0 mt-4">
                        <div class="section-intro__content _fsx20r16">
                            <div class="theme-customize-header-section__header pt-0">
                                <h2 class="theme-customize-header-section__header__title">
                                    Thông tin công ty
                                </h2>
                            </div>

                            <p class="section-intro__content">
                                <i> Tên đơn vị </i> <br>
                                <span> Công ty TNHH Sản xuất và Thương mại Hải Long. </span>
                            </p>

                            <p class="section-intro__content">
                                <i> Tên tiếng anh </i> <br>
                                <span> Hai Long Production and Trading Co,.Ltd. </span>
                            </p>

                            <p class="section-intro__content">
                                <i> Ten Glao Dich </i> <br>
                                <span> HAILON KYOTO Co,.Ltd. </span>
                            </p>

                            <p class="section-intro__content">
                                <i> Cơ quan quản lý </i> <br>
                                <span> Sở Kế Hoạch và Đầu tư TP Hà Nội. </span>
                            </p>

                            <p class="section-intro__content d-flex">
                                <span class="mr-5">
                                    <i> Ngày thành lập </i> <br>
                                    <span> 03/05/2021</span>
                                </span>

                                <span>
                                    <i> Mã số thuế </i> <br>
                                    <span> 0500417176 </span>
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-7 col-12 order-1 pr-5">
                        <div class="splide" id="section-intro__carousel">
                            <div class="splide__slider">
                                <!-- relative -->
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <img alt="image" width="" height="" src="{{Theme::asset()->url('images/introduce/Rectangle_58.jpg')}}" />
                                        </li>
                                        <li class="splide__slide">
                                            <img alt="image" width="" height="" src="{{Theme::asset()->url('images/introduce/Rectangle_63.jpg')}}" />
                                        </li>
                                        <li class="splide__slide">
                                            <img alt="image" width="" height="" src="{{Theme::asset()->url('images/introduce/Rectangle_64.jpg')}}" />
                                        </li>
                                        <li class="splide__slide">
                                            <img alt="image" width="" height="" src="{{Theme::asset()->url('images/introduce/Rectangle_65.jpg')}}" />
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
        </div>
    </div>
    <!--end css in file common.scss----->

    <!--css in file common.scss----->
    <div class="box-common-showroom-wrapper">
        <div class="container-customize">
            <div class="box-common-showroom distance-below theme-customize-header-section">
                <div class="theme-customize-header-section__header">
                    <h1 class="theme-customize-header-section__header__title">
                        Showroom Hailong Glass
                    </h1>
                    <p class="theme-customize-header-section__header__des mb-4">
                        Danh sách Showroom Glass
                    </p>
                </div>

                <div class="box-common-showroom__content _fsx20r16">
                    <div class="row">
                        <div class="col-lg-7 col-12">
                            <div class="box__tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item box__tabs__header" role="presentation">
                                        <button class="nav-link active px-0" id="col-tab1-tab" data-bs-toggle="tab" data-bs-target="#col-tab1" type="button" role="tab" aria-controls="col-tab1" aria-selected="true">  Miền Bắc </button>
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
                                <div class="box__infoOther__header">
                                    <h3 class="box__infoOther__header__title"> Nhà Máy </h3>
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
                <div class="theme-customize-header-section__header distance-below d-md-flex">
                    <h2 class="theme-customize-header-section__header__title col-lg-3 col-md-4 pl-0">
                        Đối tác của Hailong Glass
                    </h2>
                    <p class="theme-customize-header-section__header__des mb-md-4 mb-0">
                        <span>
                            Theo doanh nghiệp này, ở thời đại mà nhất cử nhất động của mọi người đều công khai trên mạng xã hội, tính riêng tư được giới siêu giàu rất coi trọng.
                        </span>
                        
                    </p>
                </div>

                <div class="splide" id="box-common-typeicalproject-carousel__carousel">
                    <div class="splide__slider">
                        <!-- relative -->
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="splide__slide__img" style="background: url({{Theme::asset()->url('images/introduce/doitac1.jpg')}}) no-repeat; background-size: cover; background-position: center;height: 60px; width: 120px;">
                                    </div>
                                </li>
                                <li class="splide__slide">
                                     <div class="splide__slide__img" style="background: url({{Theme::asset()->url('images/introduce/doitac2.jpg')}}) no-repeat; background-position: center;">
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="splide__slide__img" style="background: url({{Theme::asset()->url('images/introduce/doitac3.jpg')}}) no-repeat; background-position: center;">
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="splide__slide__img" style="background: url({{Theme::asset()->url('images/introduce/doitac4.jpg')}}) no-repeat; background-position: center;">
                                    </div>
                                </li>
                                <li class="splide__slide">
                                     <div class="splide__slide__img" style="background: url({{Theme::asset()->url('images/introduce/doitac5.jpg')}}) no-repeat; background-position: center;">
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="splide__slide__img" style="background: url({{Theme::asset()->url('images/introduce/doitac1.jpg')}}) no-repeat; background-size: cover; background-position: center;height: 60px; width: 120px;">
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
</div>

<script>
    $(document).ready(function() {
        new Splide('#section-intro__carousel', {
            heightRatio: 0.5625
            , cover: true
            , rewind: true
            , lazyLoad: 'sequential'
        , }).mount();
    })

    new Splide('#box-common-typeicalproject-carousel__carousel', {
        perPage: 5
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

</script>
