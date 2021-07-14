<div id="introduce-profile-page">
    <div class="section-banner-wrapper">
        @includeIf("theme.theme-customize::views.components.breadcrumb")
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
                        <li class="__tabs__item">
                            <a class="__tabs__link" href="/introduce" title="Tổng quan Hailong Glass"> Tổng quan Hailong Glass </a>
                        </li>

                        <li class="__tabs__item">
                            <a class="__tabs__link" href="/company-info" title="Thông tin công ty"> Thông tin công ty </a>
                        </li>

                        <li class="__tabs__item active">
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

    <div class="section-intro-wrapper _fsx20r16">
        <div class="container-customize">
            <p class="my-5">
                Hồ sơ năng lực như bức chân dung hoàn chỉnh về một doanh nghiệp. Bức chân dung ấy cũng đầy đủ, chi tiết, càng hiện lên sống động bao nhiêu thì càng
                giúp cho thương hiệu của doanh nghiệp được nhận diện rõ ràng bấy nhiều. Một câu hỏi thường xuyên được đặt ra, vậy làm sao để có một bức chân dung
                doanh nghiệp hoàn chỉnh và ấn tượng
            </p>
        </div>

        <div class="section-intro__picture">
            <img class="mw-100" width="" height="" src="{{Theme::asset()->url('images/introduce/pexels-charles-parker-5845554.jpg')}}" alt="ảnh banner" />
        </div>
    </div>

    <!--css in file common.scss----->
    <div class="box-common-producecapacity-wrapper bg-white">
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
            
            <!--css in file common.scss----->
            <div class="box-common-statistics-wrapper mt-n3">
                <div class="box-common-statistics">
                    <div class="box-common-statistics__col">
                        <div class="__col__up">
                            19.504
                        </div>

                        <div class="__col__down">
                            Cong trinh su dung Hailong Glass
                        </div>
                    </div>

                    <div class="box-common-statistics__col">
                        <div class="__col__up">
                            50.000+
                        </div>

                        <div class="__col__down">
                            San pham tung ra thi truong
                        </div>
                    </div>

                    <div class="box-common-statistics__col">
                        <div class="__col__up">
                            1975
                        </div>

                        <div class="__col__down">
                            Can bo, cong nhan lam viec
                        </div>
                    </div>
                </div>
            </div>
            <!--end css in file common.scss----->
        </div>
    </div>
    <!--end css in file common.scss----->
    
    <div class="section-quality-standards-wrapper">
        <div class="container-customize">
            <div class="section-quality-standards">
                <div class="theme-customize-header-section__header">
                    <h2 class="theme-customize-header-section__header__title">
                        Tiêu chuẩn chất lượng
                    </h2>
                    <p class="theme-customize-header-section__header__des mb-4">
                        Thương hiệu được khẳng định bởi uy tín, chất lượng, tính an toàn và đặc biệt thân thiện với môi trường.
                    </p>
                </div>

                <!-----css in file common.scss--->
                <div class="box__tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item box__tabs__header" role="presentation">
                            <button class="nav-link active px-0" id="col-tab1-tab" data-bs-toggle="tab" data-bs-target="#col-tab1" type="button" role="tab" aria-controls="col-tab1" aria-selected="true"> Tiêu chuẩn việt nam( TCVN ) </button>
                        </li>

                        <li class="nav-item box__tabs__header" role="presentation">
                            <button class="nav-link px-0" id="col-tab2-tab" data-bs-toggle="tab" data-bs-target="#col-tab2" type="button" role="tab" aria-controls="col-tab2" aria-selected="true"> Tiêu chuẩn Nhật Bản JIS ) </button>
                        </li>

                        <li class="nav-item box__tabs__header" role="presentation">
                            <button class="nav-link px-0" id="col-tab3-tab" data-bs-toggle="tab" data-bs-target="#col-tab3" type="button" role="tab" aria-controls="col-tab3" aria-selected="true"> Tiêu chuẩn Mỹ ( ANSI ) </button>
                        </li>

                        <li class="nav-item box__tabs__header" role="presentation">
                            <button class="nav-link px-0" id="col-tab4-tab" data-bs-toggle="tab" data-bs-target="#col-tab4" type="button" role="tab" aria-controls="col-tab4" aria-selected="true"> Tiêu chuẩn Anh ( BS ) </button>
                        </li>
                    </ul>

                    <div class="tab-content box__tabs__content pl-0 _fsx20r16" id="myTabContent">
                        <div class="tab-pane fade show active " id="col-tab1" role="tabpanel" aria-labelledby="col-tab1-tab">
                            <p class="line__item">
                                - TCVN 6758:2015 Phương tiện giao thông đường bộ - Kinh an toàn và vật liệu
                            </p>

                            <p class="line__item">
                                - Yêu cầu và phương pháp thử trong công nhận kiểu.
                            </p>

                            <p class="line__item">
                                - TCVN 7505:2005 quy phạm sử dụng kính trong xây dựng - Lựa chọn và lắp đặt.
                            </p>

                            <p class="line__item">
                                - TCVN 7526:2005 Kính xây dựng - Định nghĩa và phân loại.
                            </p>

                            <p class="line__item">
                                - TCVN 7218:2018 Kinh tấm xây dựng - Kinh nổi.
                            </p>

                            <p class="line__item">
                                - TCVN 7219:2018 Kinh tấm xây dựng - Phương pháp thử.
                            </p>

                            <p class="line__item">
                                - TCVN 7528:2008 Kính xây dựng - Kinh phủ phản quang.
                            </p>

                            <p class="line__item">
                                - TCVN 7529:2005 Kính xây dựng - Kinh màu hấp thụ nhiệt.
                            </p>
                        </div>

                        <div class="tab-pane fade" id="col-tab2" role="tabpanel" aria-labelledby="col-tab2-tab">
                            <p class="line__item">
                                - TCVN 6758:2015 Phương tiện giao thông đường bộ - Kinh an toàn và vật liệu
                            </p>

                            <p class="line__item">
                                - Yêu cầu và phương pháp thử trong công nhận kiểu.
                            </p>

                            <p class="line__item">
                                - TCVN 7505:2005 quy phạm sử dụng kính trong xây dựng - Lựa chọn và lắp đặt.
                            </p>

                            <p class="line__item">
                                - TCVN 7526:2005 Kính xây dựng - Định nghĩa và phân loại.
                            </p>

                            <p class="line__item">
                                - TCVN 7218:2018 Kinh tấm xây dựng - Kinh nổi.
                            </p>

                            <p class="line__item">
                                - TCVN 7219:2018 Kinh tấm xây dựng - Phương pháp thử.
                            </p>

                            <p class="line__item">
                                - TCVN 7528:2008 Kính xây dựng - Kinh phủ phản quang.
                            </p>

                            <p class="line__item">
                                - TCVN 7529:2005 Kính xây dựng - Kinh màu hấp thụ nhiệt.
                            </p>
                        </div>

                        <div class="tab-pane fade" id="col-tab3" role="tabpanel" aria-labelledby="col-tab3-tab">
                            <p class="line__item">
                                - TCVN 6758:2015 Phương tiện giao thông đường bộ - Kinh an toàn và vật liệu
                            </p>

                            <p class="line__item">
                                - Yêu cầu và phương pháp thử trong công nhận kiểu.
                            </p>

                            <p class="line__item">
                                - TCVN 7505:2005 quy phạm sử dụng kính trong xây dựng - Lựa chọn và lắp đặt.
                            </p>

                            <p class="line__item">
                                - TCVN 7526:2005 Kính xây dựng - Định nghĩa và phân loại.
                            </p>

                            <p class="line__item">
                                - TCVN 7218:2018 Kinh tấm xây dựng - Kinh nổi.
                            </p>

                            <p class="line__item">
                                - TCVN 7219:2018 Kinh tấm xây dựng - Phương pháp thử.
                            </p>

                            <p class="line__item">
                                - TCVN 7528:2008 Kính xây dựng - Kinh phủ phản quang.
                            </p>

                            <p class="line__item">
                                - TCVN 7529:2005 Kính xây dựng - Kinh màu hấp thụ nhiệt.
                            </p>
                        </div>

                        <div class="tab-pane fade" id="col-tab4" role="tabpanel" aria-labelledby="col-tab4-tab">
                            <p class="line__item">
                                - TCVN 6758:2015 Phương tiện giao thông đường bộ - Kinh an toàn và vật liệu
                            </p>

                            <p class="line__item">
                                - Yêu cầu và phương pháp thử trong công nhận kiểu.
                            </p>

                            <p class="line__item">
                                - TCVN 7505:2005 quy phạm sử dụng kính trong xây dựng - Lựa chọn và lắp đặt.
                            </p>

                            <p class="line__item">
                                - TCVN 7526:2005 Kính xây dựng - Định nghĩa và phân loại.
                            </p>

                            <p class="line__item">
                                - TCVN 7218:2018 Kinh tấm xây dựng - Kinh nổi.
                            </p>

                            <p class="line__item">
                                - TCVN 7219:2018 Kinh tấm xây dựng - Phương pháp thử.
                            </p>

                            <p class="line__item">
                                - TCVN 7528:2008 Kính xây dựng - Kinh phủ phản quang.
                            </p>

                            <p class="line__item">
                                - TCVN 7529:2005 Kính xây dựng - Kinh màu hấp thụ nhiệt.
                            </p>
                        </div>
                    </div>
                </div>
                <!-----end css in file common.scss--->
            </div>
        </div>
    </div>

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
                    <div class="splide__slider _fsx20r16">
                        <!-- relative -->
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="splide__slide__img">
                                        <a href="#" title="ảnh slider">
                                            <img width="" height="" src="{{Theme::asset()->url('images/home/pexels-photo.jpg')}}" alt="ảnh slider"/>
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
                                            <a href="#" title="Căn hộ cao cấp The Minaton Residence">
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
                                            <a href="#" title="Căn hộ cao cấp The Minaton Residence">
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
                                            <a href="#" title="Căn hộ cao cấp The Minaton Residence">
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
