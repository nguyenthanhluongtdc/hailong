<div id="news-detail-page">
    @includeIf('theme.main::views.components.tabs-banner')
    <div class="news__detail__wrapper">
        <div class="container-customize">
            <div class="content__zone">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="left">
                            <div class="content__title">
                                <h1 class="title theme-customize-header-section__header__title ">
                                 {{$post->name}}
                                </h1>
                            </div>
        
                            <span class="time">
                                {{$post->created_at->format('H:i d/m/Y') }}
                            </span>
                            <div class="post-content">
                             {!!$post->content!!}
        
                            </div>
                            <div class="share">
                                <p class="share_text">
                                    {!! __('Share') !!}
                                <p>
                                @php
                                    $social_network = theme_option("social_network_repeater", []);
                                    if(!blank($social_network)) {
                                        $social_network = json_decode($social_network) ?? [];
                                    }
                                @endphp

                                @if(!blank($social_network) && !empty($social_network))
                                    <ul class="list-share">
                                        @foreach($social_network as $item)
                                            <li class="share-item">
                                                <a href="{{$item[1]->value}}" title="{{$item[0]->value}}">
                                                    <img width="20" height="20" class="img-fluid" src="{{rvMedia::getImageUrl($item[2]->value)}}" alt="icon-fb">
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>   
                                @endif
                            </div>
                            <div class="info-contact text-left">
                                <p>{!! __('Contact us now for a consultation') !!}
                                    <a class="info-contact__link" href="tel: {{theme_option('number_phone_genaral')}}" title="{{theme_option('number_phone_genaral')}}">{{theme_option('number_phone_genaral')}}</a>
                                </p>
                                
                                <p>{!! __('See product details here') !!}
                                    <a href="{{theme_option('website_link_general')}}" title="Xem chi tiết sản phẩm tại đây">{{theme_option('website_link_general')}}
                                    </a>
                                </p>
                            </div>
                            <div class="other__post">    
                                    <h4 class="title theme-customize-header-section__header__title">
                                        {!! __('other news') !!}
                                    </h4>
                               <ul class="list__post">
                                @foreach (get_recent_posts(theme_option('number_of_post_other')) as $post_recent)
                                   <li class="post-item">
                                       <a href="{{$post_recent->url}}" title="{{$post_recent->name}}">
                                            {{$post_recent->name}}
                                        </a>
                                    </li>
                                @endforeach
                                   
                               </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="right">
                            <div class="releted__post">
                                <div class="">
                                    <h4 class="title-related theme-customize-header-section__header__title" > {!! __('Related post') !!} </h4>
                                </div>
                                <div class="list-post-related">
                                    @foreach (get_related_posts($post->id,5) as $post_related)
                                    <div class="row">
                                      <div class="col-lg-6 col-md-4 col-sm-4">
                                            <a href="{{$post_related->url}}" class="news__item" title="{{$post_related->name}}">
                                                <img class="img-w-100  mb-4" width="600" height="400"  src="{{ RvMedia::getImageUrl($post_related->image, 'featured', false, RvMedia::getDefaultImage()) }}" alt="{{$post_related->name}}">
                                            </a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-4">
                                            <div class="description">
                                                <a href="{{$post_related->url}}" title="{{$post_related->name}}">{{$post_related->name}}</a>
                                            </div>
                                            <span class="time">
                                                {{$post->created_at->format('H:i d/m/Y') }}
                                            </span>
                                        </div>
                                    </div>
                                    @endforeach 
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @includeIf("theme.main::views.components.form-signup")
</div>