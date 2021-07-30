<div id="introduce-overview-page">

    @includeIf("theme.main::views.components.tabs-banner",['title'=> 'Title Introduce','menu'=>'introduce-menu'])

    <div class="box-common-intro-wrapper mt-5">
        <div class="container-customize pr-md-0">
            <div class="box-common-intro theme-customize-header-section">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="box-common-intro__content _fsx20r16">
                            <div class="theme-customize-header-section__header pt-0">
                                <h2 class="theme-customize-header-section__header__title" data-aos="fade-right">
                                    {{has_field($page, 'title_module_introductory')}}
                                </h2>
                            </div>

                            <div data-aos="fade-up">
                                {!!has_field($page, 'content_module_introductory')!!}
                            </div>

                            <div class="line-border mt-md-4 mt-3" data-aos="fade-right"> </div>

                            <p class="title-underline" data-aos="fade-up">
                                <strong> {!!has_field($page, 'description_module_introductory')!!} </strong>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-12" data-aos="flip-right">

                        <div class="ytvideo box-common-intro__picture" data-video="7ixLP6mUqnw" style="width:560px; height:315px; background-image:url({{rvMedia::getImageUrl(has_field($page, 'video_module_introductory'))}})">

                            <div class="seo">
                                Video Haillong Glass
                            </div>
                            <span class="playbutton"></span>

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
                    <h2 class="theme-customize-header-section__header__title" data-aos="fade-right">
                        {{has_field($page, 'title_module_value')}}
                    </h2>
                </div>

                <ul class="box-common-many-col__list mb-0 _fsx20r16">
                    @if(has_field($page, 'col_module_value'))
                    @foreach(has_field($page, 'col_module_value') as $key => $row)
                    @php $imageValue[] = RvMedia::getImageUrl(get_sub_field($row, 'image')); @endphp
                    <li class="box-common-many-col__list__item item-core-value col-lg-4 col-sm-6 col-12 px-lg-4 px-3" data-aos="zoom-in-down" data-image-id="{{$key}}">
                        <b class="title-parent"> {{has_sub_field($row, 'title')}} </b>
                        <p class="des-children">
                            {!!has_sub_field($row, 'description')!!}
                        </p>
                    </li>
                    @endforeach
                    @endif
                </ul>
            </div>
        </div>
        @if(has_field($page, 'col_module_value'))
            <div class="box-common-many-col__picture" data-aos="zoom-out-up">
                <img id="image-value" width="1900" height="500" src="{{rvMedia::getImageUrl(has_sub_field(has_field($page, 'col_module_value')[0], 'image'))}}" alt="ảnh intro" />
            </div>
        @endif
    </div>

    <!----css in file common.scss----->
    <div class="box-common-many-col-wrapper">
        <div class="container-customize">
            <div class="box-common-many-col theme-customize-header-section">
                <div class="theme-customize-header-section__header d-md-flex">
                    <h2 class="theme-customize-header-section__header__title col-lg-3 col-md-4 pl-0" data-aos="fade-right">
                        {!!has_field($page, 'title_module_whychoose_introduce')!!}
                    </h2>
                    <p class="theme-customize-header-section__header__des align-items-end mb-md-4 mb-0" data-aos="fade-left">
                        {!!has_field($page, 'description_module_whychoose_introduce')!!}
                    </p>
                </div>

                <ul class="box-common-many-col__list mb-0 _fsx20r16">
                    @if(has_field($page, 'col_module_whychoose_introduce'))
                    @foreach(has_field($page, 'col_module_whychoose_introduce') as $row)
                    <li class="box-common-many-col__list__item col-lg-4 col-sm-6 col-12" data-aos="zoom-in-down">
                        <b class="title-parent"> {{has_sub_field($row, 'title')}} </b>
                        <p class="des-children">
                            {!!has_sub_field($row, 'description')!!}
                        </p>
                    </li>
                    @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>

    @php echo generate_shortcode('typical-project') @endphp
</div>

<script>

    window._Introduce = {
        imageValue: {!! json_encode($imageValue ?? []) !!}
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
        , }).mount();
    })

    // VIDEO 2
    $('.ytvideo[data-video]').one('click', function() {

        var $this = $(this);
        var width = $this.attr("width");
        var height = $this.attr("height");

        $this.html('<iframe src="https://www.youtube.com/embed/' + $this.data("video") + '?autoplay=1"></iframe>');
    });
</script>
