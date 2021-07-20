<div id="introduce-profile-page">
      @includeIf("theme.main::views.components.tabs-banner",['introduces'=>$introduces, 'page'=>$page])

    <div class="section-intro-wrapper _fsx20r16">
        <div class="container-customize">
            <p class="my-5">
                {!! get_field($page, 'description_module_introductory_profile') !!}
            </p>
        </div>

        <div class="section-intro__picture">
            <img class="mw-100" width="1900" height="500" src="{{rvMedia::getImageUrl(get_field($page, 'image_module_introductory_profile'))}}" alt="ảnh banner" />
        </div>
    </div>

    <!--css in file common.scss----->
    <div class="box-common-producecapacity-wrapper bg-white">
        <div class="container-customize">
            <div class="box-common-producecapacity distance-below theme-customize-header-section">
                <div class="theme-customize-header-section__header">
                    <h2 class="theme-customize-header-section__header__title">
                        {!! has_field($page, 'title_module_nlsx_profile') !!}
                    </h2>
                </div>
                <ul class="box-common-producecapacity__list">
                    @if(has_field($page, 'list_module_nlsx_profile'))
                        @foreach(has_field($page, 'list_module_nlsx_profile') as $row)
                            <li class="box-common-producecapacity__list__item">
                                <b class="title-parent"> {!! get_sub_field($row, 'title') !!} </b>
                                <p class="des-children"> 
                                    {!! get_sub_field($row, 'description') !!}
                                </p>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            
            <!--css in file common.scss----->
            <div class="box-common-statistics-wrapper mt-n3">
                <div class="box-common-statistics">
                    @if(has_field($page, 'stats_module_nlsx_profile'))
                        @foreach(has_field($page, 'stats_module_nlsx_profile') as $row)
                            <div class="box-common-statistics__col">
                                <div class="__col__up count">
                                    {!! has_sub_field($row, 'number') !!}
                                </div>

                                <div class="__col__down">
                                    {!! has_sub_field($row, 'description') !!}
                                </div>
                            </div>
                        @endforeach
                    @endif
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
                        {!! has_field($page, 'title_module_tccl') !!}
                    </h2>
                    <p class="theme-customize-header-section__header__des mb-4">
                        {!! has_field($page, 'description_module_tccl') !!}
                    </p>
                </div>

                <!-----css in file common.scss--->
                <div class="box__tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        @if(has_field($page, 'tabs_module_tccl'))
                            @foreach(has_field($page, 'tabs_module_tccl') as $key => $row)
                                <li class="nav-item box__tabs__header" role="presentation">
                                    <button class="nav-link px-0 {{$key==0?'active':''}}" id="col-tab{{$key}}-tab" data-bs-toggle="tab" data-bs-target="#col-tab{{$key}}" type="button" role="tab" aria-controls="col-tab{{$key}}" aria-selected="true">
                                        {!! has_sub_field($row, 'title_tab') !!}
                                    </button>
                                </li>
                            @endforeach
                        @endif
                    </ul>

                    <div class="tab-content box__tabs__content pl-0 _fsx20r16" id="myTabContent">
                        @if(has_field($page, 'tabs_module_tccl'))
                            @foreach(has_field($page, 'tabs_module_tccl') as $key => $row)
                                <div class="tab-pane fade show {{$key==0?'active':''}} " id="col-tab{{$key}}" role="tabpanel" aria-labelledby="col-tab{{$key}}-tab">
                                    {!! has_sub_field($row, 'content_tab') !!}
                                </div>
                            @endforeach
                        @endif
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
                                            <img width="410" height="440" src="{{Theme::asset()->url('images/home/pexels-photo.jpg')}}" alt="ảnh slider"/>
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
                                        <img width="410" height="440" src="{{Theme::asset()->url('images/home/aircraft-airplane-blue-219014.jpg')}}" alt="ảnh slider" />
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
                                        <img width="410" height="440" src="{{Theme::asset()->url('images/home/architecture-buildings-city-373965.jpg')}}" alt="ảnh slider" />
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
    var counters = $(".__col__up.count");
    var countersQuantity = counters.length;
    var counter = [];

    for (i = 0; i < countersQuantity; i++) {
        counter[i] = parseFloat(counters[i].innerHTML);
    }

    var count = function(start, value, id) {
        var localStart = start;
        setInterval(function() {
            if (localStart < value) {
                localStart++;
                counters[id].innerHTML = localStart;
            }
        }, 4);
    }

    for (j = 0; j < countersQuantity; j++) {
        count(0, counter[j], j);
    }


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
