@php $posts  =  get_all_posts();  @endphp
<div id="news-page">
    <div class="section-banner-wrapper">
        <div class="section-breadcrumb ">
            <div class="container-customize">
                <ul class="section-breadcrumb__list pt-4">
                    <li class="__breadcrumb__item">
                        <a class="__breadcrumb__link" href="/" title="Trang chu"> Trang chủ </a>
                    </li>
                    <li class="__breadcrumb__item active">
                        Tin tức
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-customize">
            <div class="section-banner-news">
                <div class="theme-customize-header-section__header">
                    <h1 class="theme-customize-header-section__header__title">
                        Tin mới
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="news-wrapper">
        <div class="container-customize">
            <div class="news-wrapper-section">
                <div class="row">
                    @foreach (get_latest_posts(3,[],[]) as $latest_post)
                 
                    <div class="col-lg-4 col-sm-6 col-12 mb-lg-0 mb-5">
                        <div class="news-post">
                            <a href="{{$latest_post->url}}" title="{{$latest_post->name}}">
                                <img class="img-w-100" width="600" height="270" src="{{ RvMedia::getImageUrl($latest_post->image, 'featured', false, RvMedia::getDefaultImage()) }}" alt="{{$latest_post->name}}">
                                <div class="news-post__title">
                                    <h4 class="__text-20">{{$latest_post->name}}</h4>
                                </div>
                                <div class="news-post__time">
                                    <span>{{$latest_post->created_at->format('H:i d/m/Y') }}</span>
                                </div>
                                <div class="news-post__content __text-18">
                                    <p>{{$latest_post->description}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
    <section id="list-news">
        <div class="container-customize">
            <div class="section-news-list">
                <div class="theme-customize-header-section__header">
                    <h2 class="theme-customize-header-section__header__title">{{ trans('other news') }}</h2>
                </div>
                <div class="list-news-wrapper">
                    <div class="item-row">
                        <div class="row row-main ml-md-0 ml-sm-0 ml-xs-0 pr-md-0 pr-sm-0 pr-xs-0">
                            @if ($posts->count())
                            @foreach ($posts as $all_post)
                           
                            <div class="col-md-6 mb-md-line p0-md pl-md-0 pl-sm-0 pr-xs-0 pr-lg-0 pr-md-5 mb-5 mb-xl-5">
                                <div class="row">
                                   
                                    <div class="col-lg-5 col-md-5 col-sm-4 col-5 pr-0 mb-4 mb-sm-0">
                                        <a href="{{$all_post->url}}" title="{{$all_post->name}}">
                                            <img width="500" height="350" class="mw-100 img-w-100" src="{{ RvMedia::getImageUrl($all_post->image, 'featured', false, RvMedia::getDefaultImage()) }}" alt="{{$all_post->name}}">
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-7 col-7">
                                        <h5> <a href="{{$all_post->url}}" title="{{$all_post->name}}">{{$all_post->name}}</a> </h5>
                                        <span class="time">{{$all_post->created_at->format('H:i d/m/Y') }}</span>
                                        <p class="content">
                                            {{$all_post->description}}
                                        </p>
                                    </div>
                                  
                                </div>
                            </div> 
                            @endforeach
                            @endif
                          
                        </div>
                     
                    </div>
                    {{-- <div class="page-pagination text-right">
                        {!! $posts->withQueryString()->links() !!}
                    </div> --}}
                    {{-- @includeIf("theme.main::views.components.pagination") --}}
                    {{ $posts->onEachSide(1)->links('theme.main::views.components.pagination') }}
                    
                   
                </div>
              
            </div>
        </div>
    </section>
  
    @includeIf("theme.main::views.components.form-signup")
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
                                            <img width="410" height="440" src="{{Theme::asset()->url('images/home/pexels-photo.jpg')}}" alt="Căn hộ cao cấp The Minato Residence" />
                                        </a>
                                    </div>
                                    <div class="splide__slide__content">
                                        <h3 class="splide__slide__content__title">
                                            <a href="#" title="ảnh slider">
                                                Căn hộ cao cấp The Minaton Residence
                                            </a>
                                        </h3>
                                        <div class="splide__slide__des line-children"> Thiết kế cao cấp và tinh tế tại khu vực ngoài trời troi cua </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="splide__slide__img">
                                        <a href="#" title="ảnh slider">
                                            <img width="410" height="440" src="{{Theme::asset()->url('images/home/architecture-buildings-city-373965.jpg')}}" alt="Căn hộ cao cấp The Minato Residence" />
                                        </a>
                                    </div>
                                    <div class="splide__slide__content">
                                        <h3 class="splide__slide__content__title">
                                            <a href="#" title="ảnh slider">
                                                Căn hộ cao cấp The Minaton Residence
                                            </a>
                                        </h3>
                                        <div class="splide__slide__content__des line-children"> Thiết kế cao cấp và tinh tế tại khu vực ngoài trời troi cua </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="splide__slide__img">
                                        <img width="410" height="440" src="{{Theme::asset()->url('images/home/aircraft-airplane-blue-219014.jpg')}}" alt="Căn hộ cao cấp The Minato Residence" />
                                    </div>
                                    <div class="splide__slide__content">
                                        <h3 class="splide__slide__content__title">
                                            <a href="#" title="ảnh slider">
                                                Căn hộ cao cấp The Minaton Residence
                                            </a>
                                        </h3>
                                        <div class="splide__slide__content__des line-children"> Thiết kế cao cấp và tinh tế tại khu vực ngoài trời troi cua </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="splide__slide__img">
                                        <img width="410" height="440" src="{{Theme::asset()->url('images/home/architecture-buildings-city-373965.jpg')}}" alt="Căn hộ cao cấp The Minato Residence" />
                                    </div>
                                    <div class="splide__slide__content">
                                        <h3 class="splide__slide__content__title">
                                            <a href="#" title="ảnh slider">
                                                Căn hộ cao cấp The Minaton Residence
                                            </a>
                                        </h3>
                                        <div class="splide__slide__content__des line-children"> Thiết kế cao cấp và tinh tế tại khu vực ngoài trời troi cua </div>
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
