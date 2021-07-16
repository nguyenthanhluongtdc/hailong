<div id="news-detail-page">
    <div class="section-banner-wrapper pb-4">
        <div class="section-breadcrumb">
            <div class="container-customize">
                <ul class="section-breadcrumb__list pt-4">
                    <li class="__breadcrumb__item">
                        <a class="__breadcrumb__link" href="/" title="Trang chu"> Trang chủ </a> 
                    </li>
                    <li class="__breadcrumb__item">
                    Tin tức
                    </li>
                    <li class="__breadcrumb__item active">
                        Căn hộ cao cấp The Minato Residence
                    </li>
                </ul>
            </div>
        </div>
    </div>
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
                                    Chia sẻ
                                <p>
                                 <ul class="list-share">
                                     <li class="share-item"><a href="" title="icon"><img width="20" height="20" class="img-fluid" src="{{Theme::asset()->url('images/news/facebook.jpg')}}" alt="icon-fb"></a></li>
                                     <li class="share-item"><a href="" title="icon"><img width="20" height="20" class="img-fluid" src="{{Theme::asset()->url('images/news/instagram.jpg')}}" alt="icon-share"></a></li>
                                     <li class="share-item"><a href="" title="icon"><img width="20" height="20" class="img-fluid" src="{{Theme::asset()->url('images/news/lien-ket.jpg')}}" alt="icon-lk"></a></li>
                                     <li class="share-item"><a href="" title="icon"><img width="20" height="20" class="img-fluid" src="{{Theme::asset()->url('images/news/linkedin.jpg')}}" alt="icon-linkedin"></a></li>
                                </ul>   
                            </div>
                            <div class="info-contact">
                                <p>Liên hệ ngay để được hộ trợ tư vấn:<a class="info-contact__link" href="" title="hot-line">Hotline: 1900 4696</a></p>
                                
                                <p> Xem chi tiết sản phẩm tại đây:<a href="http://colorglass.vn/" title="Xem chi tiết sản phẩm tại đây">http://colorglass.vn/</a></p>
                            
                            </div>
                            <div class="other__post">    
                                    <h4 class="title theme-customize-header-section__header__title">Tin tức khác</h4>
                               <ul class="list__post">
                                @foreach (get_recent_posts(5) as $post_recent)
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
                                    <h4 class="title-related theme-customize-header-section__header__title" >Tin liên quan</h4>
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