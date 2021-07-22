<div id="company-info-page">
    @includeIf("theme.main::views.components.tabs-banner",['title'=> 'Title Introduce','menu'=>'introduce-tabs'])

    <!--css in file common.scss----->
    <div class="box-common-intro-wrapper mt-5">
        <div class="container-customize pl-md-0">
            <div class="box-common-intro section-intro theme-customize-header-section">
                <div class="row">
                    <div class="col-md-5 col-12 order-2 mt-md-0 mt-4">
                        <div class="section-intro__content last-position _fsx20r16">
                            <div class="theme-customize-header-section__header pt-0">
                                <h2 class="theme-customize-header-section__header__title">
                                    {!! get_field($page, 'title_module_companyinfo') !!}
                                </h2>
                            </div>

                            @if(has_field($page, 'content_module_companyinfo'))
                            @foreach(has_field($page, 'content_module_companyinfo') as $row)
                            <p class="section-intro__content">
                                <i> {!! has_sub_field($row, 'title') !!} </i> <br>
                                <b> {!! has_sub_field($row, 'description') !!} </b>
                            </p>
                            @endforeach
                            @endif

                            {{-- <p class="section-intro__content d-flex">
                                <span class="mr-5">
                                    <i> Ngày thành lập </i> <br>
                                    <span> 03/05/2021</span>
                                </span>

                                <span>
                                    <i> Mã số thuế </i> <br>
                                    <span> 0500417176 </span>
                                </span>
                            </p> --}}
                        </div>
                    </div>

                    <div class="col-md-7 col-12 order-1 pr-5">
                        <div class="splide" id="section-intro__carousel">
                            <div class="splide__slider">
                                <!-- relative -->
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        @if(has_field($page, 'listimage_module_companyinfo'))
                                        @foreach(has_field($page, 'listimage_module_companyinfo') as $row)
                                        <li class="splide__slide">
                                            <img alt="image" width="900" height="500" src="{{rvMedia::getImageUrl(get_sub_field($row, 'image'))}}" />
                                        </li>
                                        @endforeach
                                        @endif
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
                    <h2 class="theme-customize-header-section__header__title">
                        {{has_field($page, 'title_module_showroom')}}
                    </h2>
                    <p class="theme-customize-header-section__header__des mb-4">
                        {{has_field($page, 'description_module_showroom')}}
                    </p>
                </div>

                <div class="box-common-showroom__content">
                    <div class="row">
                        <div class="col-lg-7 col-12">
                            <div class="box__tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    @if(has_field($page, 'tab_module_showroom'))
                                    @foreach(has_field($page, 'tab_module_showroom') as $key => $tab)
                                    <li class="nav-item box__tabs__header" role="presentation">
                                        <button class="nav-link px-0 {{$key==0?'active':''}}" id="col-tab{{$key}}-tab" data-bs-toggle="tab" data-bs-target="#col-tab{{$key}}" type="button" role="tab" aria-controls="col-tab{{$key}}" aria-selected="true">
                                            {{has_sub_field($tab, 'domain')}}
                                        </button>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>

                                <div class="tab-content box__tabs__content" id="myTabContent">
                                    @if(has_field($page, 'tab_module_showroom'))
                                    @foreach(has_field($page, 'tab_module_showroom') as $key => $tab)
                                    <div class="tab-pane fade  {{$key==0?'show active':''}}" id="col-tab{{$key}}" role="tabpanel" aria-labelledby="col-tab{{$key}}-tab">
                                        @foreach(has_sub_field($tab, 'row_content') as $row)
                                        <div class="line__item">
                                            <div>
                                                <a href="#" title="{{has_sub_field($row, 'address')}}" class="address link-map" data-lat="{{get_sub_field($row, 'url_google_map')}}" data-toggle="modal" data-target="#myMapModal">
                                                    <b> {{has_sub_field($row, 'address')}} </b>
                                                </a>
                                            </div>
                                            <div class="des-children">
                                                <span class="phone">
                                                    {{has_sub_field($row, 'phone')}}
                                                </span>
                                            </div>
                                        </div>
                                        @endforeach
                                        <a class="btn-read-more tabs small" href="#" title="{!! __("Read more") !!}">
                                            {!! __("Read more") !!}
                                        </a>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="box__infoOther">
                                <div class="theme-customize-header-section__header pt-0">
                                    <h3 class="theme-customize-header-section__header__title text-white mb-2">
                                        {{has_field($page, 'title_module_nhamay')}}
                                    </h3>
                                    <p class="box__infoOther__header__des des-children">
                                        {{has_field($page, 'description_module_nhamay')}}
                                    </p>
                                </div>

                                <div class="box__infoOther__list">
                                    @if(has_field($page, 'content_module_nhamay'))
                                    @foreach(has_field($page, 'content_module_nhamay') as $row)
                                    <div class="line__item">
                                        <div>
                                            <a href="#" title="{{has_sub_field($row, 'address')}}" class="address link-map" data-lat="{{get_sub_field($row, 'url_google_map')}}" data-toggle="modal" data-target="#myMapModal">
                                                <b> {{has_sub_field($row, 'address')}} </b>
                                            </a>
                                        </div>
                                        <div class="des-children">
                                            <span class="phone white">
                                                {{get_sub_field($row, 'phone')}}
                                            </span>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
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
    <div class="box-common-partner-carousel-wrapper">
        <div class="container-customize">
            <div class="box-common-partner-carousel distance-below theme-customize-header-section">
                <div class="theme-customize-header-section__header mb-lg-4 mb-3 d-md-flex">
                    <h2 class="theme-customize-header-section__header__title col-lg-3 col-md-4 pl-0">
                        {!! has_field($page, 'title_module_partner') !!}
                    </h2>
                    <p class="theme-customize-header-section__header__des mb-md-4 mb-0">
                        <span>
                            {!! has_field($page, 'description_module_partner') !!}
                        </span>

                    </p>
                </div>

                <div class="splide" id="box-common-partner-carousel__carousel">
                    <div class="splide__slider">
                        <!-- relative -->
                        <div class="splide__track">
                            <ul class="splide__list">
                                @if(has_field($page, 'listimage_module_partner'))
                                @foreach(has_field($page, 'listimage_module_partner') as $row)
                                <li class="splide__slide">
                                    <img src="{{rvMedia::getImageUrl(get_sub_field($row, 'image'))}}" alt="Doi tac" width="250" height="100" />
                                </li>
                                @endforeach
                                @endif
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

<!--Google map-->
<div class="modal fade" id="myMapModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100"> {!! __('Google map') !!} <span id="lat" class="float-right"></span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div id="map-canvas" class="">
                    <iframe class="w-100 h-100 modal-map" src="" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var map = document.getElementsByClassName("modal-map")[0];
        var arr = document.getElementsByClassName('link-map');

        for (var i = 0; i < arr.length; i++) {
            arr[i].onclick = function(e) {
                var a = e.target;
                var url = a.getAttribute('data-lat');
                map.src = url;
            }
        }

        new Splide('#section-intro__carousel', {
            heightRatio: 0.5625
            , cover: true
            , rewind: true
            , lazyLoad: 'sequential'
        , }).mount();


        new Splide('#box-common-partner-carousel__carousel', {
            perPage: 5
            , gap: 20
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

        if ($('.tab-pane.show .line__item:hidden').length == 0) {
            $('.btn-read-more.tabs').hide();
        }
        $(".btn-read-more.tabs").on('click', function(e) {
            e.preventDefault();

            if ($('.tab-pane.show .line__item:hidden').length == 0) {
                $('.tab-pane.show .line__item').slice(3).slideUp();
                $(this).text('Xem thêm');
            } else {
                $('.tab-pane.show .line__item:hidden').slice(0, 2).slideDown();

                if ($('.tab-pane.show .line__item:hidden').length == 0) {
                    $(this).text('Thu gọn');
                }
            }
        });
    })

</script>
