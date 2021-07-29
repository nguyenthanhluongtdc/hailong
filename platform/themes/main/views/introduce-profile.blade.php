<div id="introduce-profile-page">
    @includeIf("theme.main::views.components.tabs-banner",['title'=> 'Title Introduce','menu'=>'introduce-menu'])

    <div class="section-intro-wrapper _fsx20r16">
        <div class="container-customize" data-aos="fade-down">
            <p class="my-5">
                {!! get_field($page, 'description_module_introductory_profile') !!}
            </p>
        </div>

        <div class="section-intro__picture" data-aos="fade-up">
            <img class="mw-100" width="1900" height="500" src="{{rvMedia::getImageUrl(get_field($page, 'image_module_introductory_profile'))}}" alt="ảnh banner" />
        </div>
    </div>

    <!--css in file common.scss----->
    <div class="box-common-producecapacity-wrapper bg-white">
        <div class="container-customize">
            <div class="box-common-producecapacity distance-below theme-customize-header-section">
                <div class="theme-customize-header-section__header">
                    <h2 class="theme-customize-header-section__header__title" data-aos="fade-right">
                        {!! has_field($page, 'title_module_nlsx_profile') !!}
                    </h2>
                </div>
                <ul class="box-common-producecapacity__list">
                    @if(has_field($page, 'list_module_nlsx_profile'))
                        @foreach(has_field($page, 'list_module_nlsx_profile') as $key => $row)
                            <li class="box-common-producecapacity__list__item" data-aos="{{$key%2==0?'fade-right':'fade-left'}}" >
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
            <div class="box-common-statistics-wrapper mt-n3" data-aos="fade-down">
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
                    <h2 class="theme-customize-header-section__header__title" data-aos="fade-right">
                        {!! has_field($page, 'title_module_tccl') !!}
                    </h2>
                    <p class="theme-customize-header-section__header__des mb-4" data-aos="fade-left">
                        {!! has_field($page, 'description_module_tccl') !!}
                    </p>
                </div>

                <!-----css in file common.scss--->
                <div class="box__tabs" data-aos="fade-up">
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

    {!! do_shortcode('[typical-project][/typical-project]') !!}
</div>

<script>
    window._counter = true;

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
