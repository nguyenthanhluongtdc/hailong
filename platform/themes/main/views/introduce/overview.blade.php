
<div id="introduce-overview-page">

   @includeIf("theme.main::views.components.tabs-banner",['introduces'=>$introduces, 'page'=>$page])

    <div class="box-common-intro-wrapper mt-5 ">
        <div class="container-customize pr-md-0">
            <div class="box-common-intro theme-customize-header-section">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="box-common-intro__content _fsx20r16">
                            <div class="theme-customize-header-section__header pt-0">
                                <h2 class="theme-customize-header-section__header__title">
                                    {{get_field($page, 'title_module_introductory')}}
                                </h2>
                            </div>

                           {!!get_field($page, 'content_module_introductory')!!}
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="box-common-intro__picture video">
                            <img width="850" height="350" src="{{rvMedia::getImageUrl(get_field($page, 'video_module_introductory'))}}" alt="video-box" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----css in file common.scss----->
    <div class="box-common-many-col-wrapper">
        <div class="container-customize">
            <div class="box-common-many-col theme-customize-header-section">
                <div class="theme-customize-header-section__header">
                    <h2 class="theme-customize-header-section__header__title">
                        {{has_field($page, 'title_module_value')}}
                    </h2>
                </div>

                <ul class="box-common-many-col__list mb-0 _fsx20r16">
                @if(has_field($page, 'col_module_value'))
                    @foreach(has_field($page, 'col_module_value') as $row)
                    <li class="box-common-many-col__list__item col-lg-4 col-sm-6 col-12">
                        <b> {{get_sub_field($row, 'title')}} </b>
                        <p class="des-children"> 
                            {!!get_sub_field($row, 'description')!!}
                        </p>
                    </li>
                    @endforeach
                @endif
                </ul>
            </div>
        </div>
        <div class="box-common-many-col__picture">
            <img width="1900" height="500" src="{{rvMedia::getImageUrl(get_field($page, 'image_module_value'))}}" alt="ảnh intro" />
        </div>
    </div>

    <!----css in file common.scss----->
    <div class="box-common-many-col-wrapper">
        <div class="container-customize">
            <div class="box-common-many-col theme-customize-header-section">
                <div class="theme-customize-header-section__header d-md-flex">
                    <h2 class="theme-customize-header-section__header__title col-lg-3 col-md-4 pl-0">
                        {!!get_field($page, 'title_module_whychoose_introduce')!!}
                    </h2>
                    <p class="theme-customize-header-section__header__des align-items-end mb-md-4 mb-0">
                        {!!get_field($page, 'description_module_whychoose_introduce')!!}
                    </p>
                </div>

                <ul class="box-common-many-col__list mb-0 _fsx20r16">
                @if(has_field($page, 'col_module_whychoose_introduce'))
                    @foreach(has_field($page, 'col_module_whychoose_introduce') as $row)
                    <li class="box-common-many-col__list__item col-lg-4 col-sm-6 col-12">
                        <b> {{get_sub_field($row, 'title')}} </b>
                        <p class="des-children"> 
                            {!!get_sub_field($row, 'description')!!}
                        </p>
                    </li>
                    @endforeach
                @endif
                </ul>
            </div>
        </div>
    </div>

    <!----css in file common.scss----->
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
                                            <img width="410" height="440" src="{{Theme::asset()->url('images/home/pexels-photo.jpg')}}"  alt="ảnh slider"/>
                                        </a>
                                    </div>
                                    <div class="splide__slide__content">
                                        <h3 class="splide__slide__content__title">
                                            <a href="#" title="Căn hộ cao cấp The Minaton Residence">
                                                Căn hộ cao cấp The Minaton Residence
                                            </a>
                                        </h3>
                                        <div class="splide__slide__des des-children"> Thiết kế cao cấp và tinh tế tại khu vực ngoài trời troi cua </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="splide__slide__img">
                                        <a href="#" title="Căn hộ cao cấp The Minaton Residence">
                                            <img width="410" height="440" src="{{Theme::asset()->url('images/home/architecture-buildings-city-373965.jpg')}}" alt="ảnh slider" />
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
                                        <img width="410" height="440" src="{{Theme::asset()->url('images/home/aircraft-airplane-blue-219014.jpg')}}" alt="ảnh slider"/>
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
                                        <img width="410" height="440" src="{{Theme::asset()->url('images/home/architecture-buildings-city-373965.jpg')}}" alt="ảnh slider"/>
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
        , }).mount();
    })

</script>
