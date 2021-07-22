<div id="projects-detail-page">
    @includeIf("theme.main::views.components.tabs-banner")

    @if($project)

    <!--css in file common.scss----->
    <div class="box-common-intro-wrapper mt-5">
        <div class="container-customize pr-lg-0">
            <div class="box-common-intro section-intro theme-customize-header-section">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="section-intro__content__top">
                            <div class="theme-customize-header-section__header pt-0">
                                <h1 class="theme-customize-header-section__header__title">
                                    {!! $project->name !!}
                                </h1>
                            </div>

                            <p class="intro__content __text-18">
                                {!! $project->content !!}
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-7  col-12 pl-lg-4 pt-4 pt-lg-0">
                        @if(!empty($galleries['images']))
                            <div class="splide" id="section-intro__carousel__top">
                                <div class="splide__slider">
                                    <!-- relative -->
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            @foreach($galleries['images'] as $image)
                                            
                                                <li class="splide__slide">
                                                    <img class="img-w-100" width="900" height="500" src="{{rvMedia::getImageUrl($image['img'])}}" alt="ảnh-slider" />
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <div>
                                    <!-- extra contents -->
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end css in file common.scss----->
    <!--css in file common.scss----->
    <div class="box-common-intro-wrapper bottom mt-5">
        <div class="container-customize">
            <div class="box-common-intro section-intro theme-customize-header-section">
                
                <div class="section-intro__content__bottom">
                    @if(has_field($project, 'title_module_list_image'))
                        <div class="theme-customize-header-section__header pt-0">
                            <h2 class="theme-customize-header-section__header__title">
                                {!! has_field($project, 'title_module_list_image') !!}
                            </h2>
                        </div>
                    @endif

                    @if(has_field($project, 'description_module_list_image'))
                        {!! has_field($project, 'description_module_list_image') !!}
                    @endif

                </div>
                <div class="splide" id="section-intro__carousel__bottom">
                    @if(has_field($project, 'images_module_list_image'))
                        <div class="splide__slider">
                            <!-- relative -->
                            <div class="splide__track">
                                <ul class="splide__list">
                                    @foreach(has_field($project, 'images_module_list_image') as $row)
                                        <li class="splide__slide">
                                            <img class="img-w-100" width="1500" height="750" src="{{rvMedia::getImageUrl(has_sub_field($row, 'image'))}}" alt="ảnh-slider" />
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <div>
                        <!-- extra contents -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--end css in file common.scss----->
    <div class="container-customize">
        <div class="info-wrapper">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="share">
                        <p class="share_text">
                            Chia sẻ
                            <p>
                                <ul class="list-share">
                                    <li class="share-item"><a href="" alt="icon"><img class="" src="{{Theme::asset()->url('images/news/facebook.jpg')}}" alt="icon-fb"></a></li>
                                    <li class="share-item"><a href="" alt="icon"><img class="" src="{{Theme::asset()->url('images/news/instagram.jpg')}}" alt="icon-insta"></a></li>
                                    <li class="share-item"><a href="" alt="icon"><img class="" src="{{Theme::asset()->url('images/news/lien-ket.jpg')}}" alt="icon-lk"></a></li>
                                    <li class="share-item"><a href="" alt="icon"><img class="" src="{{Theme::asset()->url('images/news/linkedin.jpg')}}" alt="icon-link"></a></li>
                                </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="info-contact">
                        <p>Liên hệ ngay để được hộ trợ tư vấn:<a href="" title="Liên hệ ngay để được hộ trợ tư vấn" class="info-contact__link">Hotline: 1900 4696</a></p>

                        <p> Xem chi tiết sản phẩm tại đây:<a href="http://colorglass.vn/" title="Xem chi tiết sản phẩm tại đây">http://colorglass.vn/</a></p>

                    </div>
                </div>
            </div>


        </div>
    </div>

    @endif
</div>

<script>
    $(document).ready(function() {
        new Splide('#section-intro__carousel__top', {
            heightRatio: 0.5625
            , cover: true
            , rewind: true
            , lazyLoad: 'sequential'
        , }).mount();
        new Splide('#section-intro__carousel__bottom', {
            heightRatio: 0.5625
            , cover: true
            , rewind: true
            , lazyLoad: 'sequential'
        , }).mount();
    })

</script>
