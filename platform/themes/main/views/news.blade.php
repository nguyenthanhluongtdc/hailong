@php $posts  =  get_all_posts();  @endphp
<div id="news-page">
    @includeIf('theme.main::views.components.tabs-banner',['title'=>__('News')])
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

    {!! do_shortcode('[typical-project][/typical-project]') !!}

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
