        <footer>
            <div class="footer-wrapper">
                <div class="container-customize">
                    <div class="footer">
                        <div class="footer__top">
                            <div class="row">
                                <div class="col-lg-2 col-sm-6 col-12 mb-sm-0 mb-4 footer__col">
                                    <a class="link-theme-customize text-decoration-none" href="/" title="Logo">
                                        <img class="mw-100" width="400" height="120" src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="Logo" />
                                    </a>
                                </div>

                                <div class="col-lg-4 col-sm-6 col-12 mb-sm-0 mb-3 footer__col">
                                    <div class="f-listaddress">
                                        <p class="footer__col__title">
                                            <strong> {!! __('Company name') !!} </strong>
                                        </p>

                                        @php  
                                            $info = theme_option('footer_info_repeater');
                                            if(!blank($info)) {
                                                $info = json_decode($info) ?? [];
                                            } 
                                        @endphp
                                        
                                        @if(!empty($info) && !blank($info))
                                            @foreach($info as $row)
                                                <p>
                                                    {!! $row[0]->value !!}
                                                </p>
                                            @endforeach
                                        @endif
                                        
                                        <div class="pt-4 pb-4 mt-4 mb-4 row footer__col__list__icon">
                                            <div class="col-3"> 
                                                <img width="90" height="60" class="mw-100" src="{{Theme::asset()->url('images/footer/image4.jpg')}}" alt="" /> 
                                            </div>
                                            <div class="col-3 pl-0"> 
                                                <img width="90" height="60" class="mw-100" src="{{Theme::asset()->url('images/footer/image3.jpg')}}" alt="" /> 
                                            </div>
                                            <div class="px-2 col-2 pl-0"> 
                                                <img width="80" height="50" class="mw-100" src="{{Theme::asset()->url('images/footer/image1.jpg')}}" alt="" /> 
                                            </div>
                                            <div class="col-4 px-0"> 
                                                <a href="http://online.gov.vn/?AspxAutoDetectCookieSupport=1" title="">
                                                    <img width="120" height="50" class="mw-100" src="{{Theme::asset()->url('images/footer/image2.jpg')}}" alt=""  />
                                                </a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-sm-4 col-12 mb-sm-0 mb-3 footer__col">
                                    <div class="f-listinfo">
                                        <p class="footer__col__title">
                                            <strong> {!! __('Information') !!} </strong>
                                        </p>
                                        <ul class="f-listinfo__content footer__col__list">
                                            @php 
                                                $col_link_one = theme_option('footer_col_link_one_repeater');
                                                if(!blank($col_link_one)){
                                                    $col_link_one = json_decode($col_link_one) ?? [];
                                                }
                                            @endphp

                                            @if(!empty($col_link_one) && !blank($col_link_one))
                                                @foreach($col_link_one as $row)
                                                    @php 
                                                        $page = get_page_by_id($row[0]->value);
                                                    @endphp

                                                    @if(!empty($page))
                                                        <li>
                                                            <a href="{{$page->url}}" title="{{$page->name}}"> {!! $page->name !!} </a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-sm-4 col-6 footer__col">
                                    <div class="f-listaboutus">
                                        <p class="footer__col__title">
                                            <strong> {!! __('About us') !!} </strong>
                                        </p>
                                        <ul class="f-listaboutus__content footer__col__list">
                                            @php 
                                                $col_link_one = theme_option('footer_col_link_two_repeater');
                                                if(!blank($col_link_one)){
                                                    $col_link_one = json_decode($col_link_one) ?? [];
                                                }
                                            @endphp

                                            @if(!empty($col_link_one) && !blank($col_link_one))
                                                @foreach($col_link_one as $row)
                                                    @php 
                                                        $page = get_page_by_id($row[0]->value);
                                                    @endphp

                                                    @if(!empty($page))
                                                        <li>
                                                            <a href="{{$page->url}}" title="{{$page->name}}"> {!! $page->name !!} </a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-sm-4 col-6 footer__col">
                                    <div class="f-listinfo-other">
                                        <p class="footer__col__title">
                                            <strong> &nbsp </strong>
                                        </p>
                                        <ul class="f-listinfo-other__content footer__col__list">
                                            @php 
                                                $col_link_one = theme_option('footer_col_link_three_repeater');
                                                if(!blank($col_link_one)){
                                                    $col_link_one = json_decode($col_link_one) ?? [];
                                                }
                                            @endphp

                                            @if(!empty($col_link_one) && !blank($col_link_one))
                                                @foreach($col_link_one as $row)
                                                    @php 
                                                        $page = get_page_by_id($row[0]->value);
                                                    @endphp

                                                    @if(!empty($page))
                                                        <li>
                                                            <a href="{{$page->url}}" title="{{$page->name}}"> {!! $page->name !!} </a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </ul>
                                        <div class="footer__col__list--icon pt-4">
                                            <a class="__item__icon" href="#" title="Facebook">
                                                <img width="35" height="35" src="{{Theme::asset()->url('images/hailong/fb_icon.png')}}" alt=""/>
                                            </a>

                                            <a class="__item__icon" href="#" title="Zalo">
                                                <img width="35" height="35" src="{{Theme::asset()->url('images/hailong/zalo_icon.png')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="footer__bottom copyright">
                            <p> {!! __('All rights reserved @2021 - Hailong Glass') !!} </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        {!! Theme::footer() !!}
        </body>
        </html>
<!-- Messenger Plugin chat Code -->
{{-- <div id="fb-root"></div> --}}

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "100787755617214");
  chatbox.setAttribute("attribution", "biz_inbox");

  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v11.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>