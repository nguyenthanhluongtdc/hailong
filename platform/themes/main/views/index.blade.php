<div id="home-page">
    <div class="section-intro-wrapper">
        <div class="container-customize">
            <div class="section-intro distance-below">
                <div class="d-inline-block">
                    <h1 class="section-intro__title" data-aos="fade-right"> {!! has_field($page,'title_page_home') ? get_field($page,'title_page_home') : "" !!} </h1>
                    <ul class="info-contact mb-0">
                        @if(has_field($page, 'cskh_page_home'))
                         <li class="info-contact__item" data-aos="fade-up">
                                <span>
                                    {!! __('CSKH24/7') !!}
                                </span>
                                <a class="info-contact__link" href="tel: {{get_field($page, 'cskh_page_home')}}" title="{{get_field($page, 'cskh_page_home')}}">
                                    {!! get_field($page, 'cskh_page_home') !!}
                                </a>
                            </li>
                        @endif

                        @if(has_field($page, 'list_hotline_page_home'))
                            <li class="info-contact__item" data-aos="fade-up" data-aos-delay="200">
                                <span>
                                    {!! __('Hotline') !!}:
                                </span>
                                @foreach(get_field($page, 'list_hotline_page_home') as $row)
                                    <a class="info-contact__link" href="tel: {{get_sub_field($row, 'value')}}" title="{{get_sub_field($row, 'value')}}">
                                        {!! get_sub_field($row, 'value') !!}
                                    </a>
                                    <span class="_char">
                                        -
                                    </span>
                                @endforeach
                            </li>
                        @endif

                        @if(has_field($page, 'list_email_page_home'))
                            <li class="info-contact__item" data-aos="fade-up" data-aos-delay="400">
                                <span>
                                    {!! __('Email') !!}:
                                </span>
                                @foreach(get_field($page, 'list_email_page_home') as $row)
                                    <a class="info-contact__link" href="mailto: {{get_sub_field($row, 'value')}}" title="{{get_sub_field($row, 'value')}}">
                                        {!! get_sub_field($row, 'value') !!}
                                    </a>

                                    <span class="_char">
                                        -
                                    </span>
                                @endforeach
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>

        <div class="intro-slider">
            <div class="slider-bg">

            </div>
            <div class="container-customize pr-0">
                <div class="splide" id="section-intro__carousel" data-aos="zoom-in">
                    <div class="splide__slider">
                        <!-- relative -->
                        <div class="splide__track">
                            <ul class="splide__list">
                                @if(has_field($page, 'list_banner_image_page_home'))
                                    @foreach(has_field($page, 'list_banner_image_page_home') as $row)
                                        <li class="splide__slide">
                                            <img alt="???nh slider" width="1600" height="570" src="{{ rvMedia::getImageUrl(has_sub_field($row, 'img'))}}" />
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

    <div class="section-aboutus-wrapper _fsx20r16">
        <div class="container-customize">
            <div class="section-aboutus theme-customize-header-section">
                <div class="theme-customize-header-section__header mb-3">
                    <h2 data-aos="fade-right" class="theme-customize-header-section__header__title"> {!!has_field($page, 'title_module_aboutus') ? get_field($page, 'title_module_aboutus') : ""!!} </h2>

                    <div data-aos="fade-left">
                        {!! has_field($page, 'description_module_aboutus') ? get_field($page, 'description_module_aboutus') : "" !!}
                    </div>

                    <div class="section-aboutus__line__btn mt-lg-5 mt-md-4" data-aos="fade-down">
                        <a class="btn-read-more" href="{{route('public.single')."/".get_slug_by_reference(theme_option('aboutus_id'))}}" title="{{ __("Read more") }}">
                            {{ __("Read more") }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-ourproduct-wrapper">
            <div class="container-customize pl-md-0">
                <div class="section-ourproduct theme-customize-header-section">
                    <div class="row">
                        @php $products = get_products([],theme_option('number_product_page_home')); @endphp
                        @if(isset($products) && $products->count() >= 1)
                        <div class="col-md-4 col-12 order-md-1 order-2 pr-md-0 set-height" data-aos="fade-right">
                            <div class="section-ourproduct__left h-100">
                                <img class="w-100 h-100 " id="image-ourproduct" width="600" height="540" src="{{\RvMedia::getImageUrl($products->first()->image, 'product_home_featured', false, RvMedia::getDefaultImage())}}" alt="product" />
                            </div>
                        </div>

                        <div class="col-md-8 col-12 order-md-2 order-1 pl-md-0 get-height" data-aos="fade-left">
                            <div class="section-ourproduct__right h-100">
                                <div class="theme-customize-header-section__header __header mt-0 pt-0">
                                    <h2 data-aos="fade-right" data-aos-delay="200" class="theme-customize-header-section__header__title __title mb-2">
                                        <a href="{{route('public.single')."/".get_slug_by_reference(theme_option('products_id'))}}" title="{{has_field($page, 'title_module_product') ? get_field($page, 'title_module_product') : ""}}" class="text-white"> {{has_field($page, 'title_module_product') ? get_field($page, 'title_module_product') : ""}} </a>
                                    </h2>
                                    <p class="theme-customize-header-section__header__des __des" data-aos="fade-left" data-aos-delay="200">
                                        {{has_field($page, 'description_module_product') ? get_field($page, 'description_module_product') : ""}}
                                    </p>
                                </div>
                                <ul class="list-cate-pro">
                                    @foreach($products as $key => $product)
                                    @php $imageProducts[] = RvMedia::getImageUrl($product->image, 'product_home_featured', false, RvMedia::getDefaultImage()); @endphp
                                    <li class="list-cate-pro__item" data-aos="{{$key%2==0?'fade-right':'fade-left'}}" data-aos-delay="200">
                                        <a class="list-cate-pro__item__link" href="{{ $product->url }}" title="{{$product->name}}" data-image-id="{{$key}}"> {{$product->name}} </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!--css in file common.scss----->
        <div class="box-common-producecapacity-wrapper">
            <div class="container-customize">
                <div class="box-common-producecapacity distance-below theme-customize-header-section">
                    <div class="theme-customize-header-section__header">
                        <h2 data-aos="fade-right" class="theme-customize-header-section__header__title"> {{has_field($page, 'title_module_nlsx') ? get_field($page, 'title_module_nlsx') : ''}} </h2>
                    </div>
                    <ul class="box-common-producecapacity__list">
                        @if(has_field($page, 'col_module_nlsx'))
                        @foreach(get_field($page, 'col_module_nlsx') as $key => $row)
                        <li class="box-common-producecapacity__list__item" data-aos="{{$key%2==0?'fade-right':'fade-left'}}">
                            <b class="title-parent"> {{get_sub_field($row, 'title')}} </b>
                            <p class="des-children">
                                {{get_sub_field($row, 'description')}}
                            </p>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <!--end css in file common.scss----->

        <!--css in file common.scss----->
        <div class="box-common-many-col-wrapper bg-white">
            <div class="container-customize pr-lg-0">
                <div class="box-common-many-col theme-customize-header-section">
                    <div class="row">
                        <div class="col-lg-6 pb-5">
                            <div class="theme-customize-header-section__header">
                                <h2 data-aos="fade-right" class="theme-customize-header-section__header__title">
                                    {{has_field($page, 'title_module_whychoose') ? get_field($page, 'title_module_whychoose') : ""}}
                                </h2>
                                <p class="theme-customize-header-section__header__des" data-aos="fade-left">
                                    {{has_field($page, 'description_module_whychoose') ? get_field($page, 'description_module_whychoose') : ""}}
                                </p>
                            </div>

                            <ul class="box-common-many-col__list mb-0">
                                @if(has_field($page, 'col_module_whychoose'))
                                @foreach(get_field($page, 'col_module_whychoose') as $key => $row)
                                @if(has_sub_field($row, 'image'))
                                @php $imageWhy[] = RvMedia::getImageUrl(get_sub_field($row, 'image')); @endphp
                                @endif
                                <li class="box-common-many-col__list__item col-sm-6 col-12 item-why" data-image-id="{{$key}}" data-aos="zoom-in-down">
                                    <b class="title-parent"> {{has_sub_field($row, 'title') ? get_sub_field($row, 'title') : ""}} </b>
                                    <p class="des-children">
                                        {{has_sub_field($row, 'description') ? get_sub_field($row, 'description') : ""}}
                                    </p>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>

                        <div class="col-lg-6" data-aos="zoom-out-up">
                            @if(has_field($page, 'image_module_whychoose'))
                            <div class="box-common-many-col__picture bg-image mt-0 h-100" id="image-why-choose" style="background-image: url({{RvMedia::getImageUrl(get_field($page, 'image_module_whychoose'))}});">
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end css in file common.scss----->

        <!--css in file common.scss----->
        {{-- <div class="box-common-showroom-wrapper">
        <div class="container-customize">
            <div class="box-common-showroom distance-below theme-customize-header-section">
                <div class="theme-customize-header-section__header">
                    <h2 data-aos="fade-right" class="theme-customize-header-section__header__title">
                        {{has_field($page, 'title_module_showroom') ? get_field($page, 'title_module_showroom') : ""}}
        </h2>
        <p class="theme-customize-header-section__header__des mb-4">
            {{has_field($page, 'description_module_showroom') ? get_field($page, 'description_module_showroom') : ""}}
        </p>
    </div>

    <div class="box-common-showroom__content">
        <div class="row">
            <div class="col-lg-7 col-12">
                <div class="box__tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        @if(has_field($page, 'tab_module_showroom'))
                        @foreach(get_field($page, 'tab_module_showroom') as $key => $tab)
                        <li class="nav-item box__tabs__header" role="presentation">
                            <button class="nav-link px-0 {{$key==0?'active':''}}" id="col-tab{{$key}}-tab" data-bs-toggle="tab" data-bs-target="#col-tab{{$key}}" type="button" role="tab" aria-controls="col-tab{{$key}}" aria-selected="true">
                                {{has_sub_field($tab, 'domain') ? get_sub_field($tab, 'domain') : ""}}
                            </button>
                        </li>
                        @endforeach
                        @endif
                    </ul>

                    <div class="tab-content box__tabs__content" id="myTabContent">
                        @if(has_field($page, 'tab_module_showroom'))
                        @foreach(get_field($page, 'tab_module_showroom') as $key => $tab)
                        <div class="tab-pane fade  {{$key==0?'show active':''}}" id="col-tab{{$key}}" role="tabpanel" aria-labelledby="col-tab{{$key}}-tab">
                            @foreach(has_sub_field($tab, 'row_content') as $row)
                            <div class="line__item">
                                <div>
                                    <a href="#" title="{{has_sub_field($row, 'address') ? get_sub_field($row, 'address') : ""}}" class="address link-map" data-lat="{{has_sub_field($row, 'url_google_map') ? get_sub_field($row, 'url_google_map') : ""}}" data-toggle="modal" data-target="#myMapModal">
                                        <b> {{has_sub_field($row, 'address') ? get_sub_field($row, 'address') : ""}} </b>
                                    </a>
                                </div>
                                <div class="des-children">
                                    <span class="phone">
                                        {{has_sub_field($row, 'phone') ? get_sub_field($row, 'phone') : ""}}
                                    </span>
                                </div>
                            </div>
                            @endforeach

                            <a class="btn-read-more tabs small" href="#" title="{{ __("Read more") }}"> {{ __("Read more") }} </a>
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
                            {{has_field($page, 'title_module_nhamay') ? get_field($page, 'title_module_nhamay') : ""}}
                        </h3>
                        <p class="box__infoOther__header__des des-children">
                            {{has_field($page, 'description_module_nhamay') ? get_field($page, 'description_module_nhamay') : ""}}
                        </p>
                    </div>

                    <div class="box__infoOther__list">
                        @if(has_field($page, 'content_module_nhamay'))
                        @foreach(get_field($page, 'content_module_nhamay') as $row)
                        <div class="line__item">
                            <div>
                                <a href="#" title="{{has_sub_field($row, 'address') ? get_sub_field($row, 'address') : ""}}" class="address link-map" data-lat="{{has_sub_field($row, 'url_google_map') ? get_sub_field($row, 'url_google_map') : ""}}" data-toggle="modal" data-target="#myMapModal">
                                    <b> {{has_sub_field($row, 'address') ? get_sub_field($row, 'address') : ""}} </b>
                                </a>
                            </div>
                            <div class="des-children">
                                <span class="phone white">
                                    {{has_sub_field($row, 'phone') ? get_sub_field($row, 'phone') : ""}}
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
</div> --}}
{!! do_shortcode('[showrooms][/showrooms]') !!}
<!--end css in file common.scss----->

@php echo generate_shortcode('typical-project') @endphp

<div class="section-news-wrapper">
    <div class="container-customize">
        <div class="section-news distance-below theme-customize-header-section">
            <div class="theme-customize-header-section__header distance-below">
                <h2 data-aos="fade-right" class="theme-customize-header-section__header__title">
                    {{ __('News') }}
                </h2>
                <p class="theme-customize-header-section__header__des" data-aos="fade-left">
                    <span>
                        {!! __('Description news') !!}
                    </span>
                    <a class="btn-read-more" href="{{route('public.single')."/".get_slug_by_reference(theme_option('news_id'))}}" title="Read more"> {{ __('Read more') }} </a>
                </p>
            </div>

            <div class="section-news__content _fsx20r16">
                <div class="row">
                    @php
                        $posts = get_latest_posts(3);
                    @endphp
                    @if(count($posts)>0)
                        <div class="col-lg-6" data-aos="fade-right">
                            <div class="col-core col-big h-100">
                                <a href="{{$posts[0]->url}}" title="{{$posts[0]->name}}" class="h-100 w-100 d-lg-inline-block">
                                    <div class="img-filter">
                                        <img src="{{rvMedia::getImageUrl($posts[0]->image, 'news_home_featured')}}" alt="{{$posts[0]->name}}" class="d-lg-none w-100" />
                                    </div>

                                    <div class="img h-100 d-lg-block d-none" style="background-image: url({{rvMedia::getImageUrl($posts[0]->image, 'news_home_featured', false, RvMedia::getDefaultImage())}}); background-size: cover; background-repeat: no-repeat;">

                                    </div>
                                </a>

                                <div class="col-core__content">
                                    <h3 class="col-core__content__title">
                                        <a href="{{$posts[0]->url}} " title="{!!$posts[0]->name!!}"> {!!$posts[0]->name!!} </a>
                                    </h3>
                                    <div class="col-core__content__time">
                                        <span> {{$posts[0]->created_at->format('H:i d/m/Y')}} </span>
                                    </div>
                                    <p class="col-core__content__des des-children">
                                        {!!(!empty($posts[0]->description)) ? $posts[0]->description : $posts[0]->name!!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(count($posts) > 1)
                        <div class="col-lg-6 mt-lg-0 mt-3">
                            <div class="box-news-main">
                                @php unset($posts[0]) @endphp
                                @foreach($posts as $key => $post)
                                <div class="col-core col-flex-box" data-aos="fade-left" data-aos-delay="{{$key*400}}">
                                    <div class="col-core__box__img pr-md-3 pr-0">
                                        <a href="{{$post->url}}" title="{!!$post->name!!}">
                                            <div class="img-filter">
                                                <img width="250" height="160" class="col-core__img" src="{{rvMedia::getImageUrl($post->image, 'news_home_featured', false, RvMedia::getDefaultImage())}}" alt="{{$post->name}}" />
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-core__content">
                                        <h3 class="col-core__content__title">
                                            <a href="{{$post->url}}" title="{!!$post->name!!}">
                                                {!!$post->name!!}
                                            </a>
                                        </h3>
                                        <div class="col-core__content__time">
                                            <span> {{$post->created_at->format('H:i d/m/Y')}} </span>
                                        </div>
                                        <p class="col-core__content__des des-children">
                                            {!!(!empty($post->description)) ? $post->description : $post->name!!}
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@includeIf("theme.main::views.components.modal-google-map")
@includeIf("theme.main::views.components.popup")

<script>

    window._homePage = {
        imageWhy: {!! json_encode($imageWhy ?? []) !!},
        imageProducts: {!! json_encode($imageProducts ?? []) !!}
    }

</script>

