<footer>
    <div class="footer-wrapper">
        <div class="container-customize">
            <div class="footer">
                <div class="footer__top">
                    <div class="row">
                        <div class="col-lg-2 col-sm-6 col-12 mb-sm-0 mb-4 footer__col" data-aos="fade-down">
                            <a class="link-theme-customize text-decoration-none" href="/" title="Logo">
                                <img class="mw-100" width="400" height="120" src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="Logo" />
                            </a>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-12 mb-sm-0 mb-3 footer__col" data-aos="fade-down-right" data-aos-delay="200">
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

                                <div class="pt-4 pb-4 mt-4 mb-4 footer__col__list__icon">
                                    @php
                                    $linked_list = theme_option('footer_linked_list_repeater');
                                    if(!blank($linked_list)){
                                    $linked_list = json_decode($linked_list) ?? [];
                                    }
                                    @endphp

                                    @foreach($linked_list as $item)
                                    <a href="{{$item[1]->value}}" title="{{$item[0]->value}}">
                                        <img width="120" height="50" class="mw-100" src="{{rvMedia::getImageUrl($item[2]->value)}}" alt="" />
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-4 col-12 mb-sm-0 mb-3 footer__col" data-aos="fade-down-right" data-aos-delay="400">
                            <div class="f-listinfo">
                                <p class="footer__col__title">
                                    <strong> {!! __('Information') !!} </strong>
                                </p>
                                <ul class="f-listinfo__content footer__col__list">
                                    {!!
                                    Menu::renderMenuLocation('footer-column-one-menu', [
                                    'options' => [],
                                    'theme' => true,
                                    'view' => 'col-info-footer',
                                    ])
                                    !!}
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-4 col-6 footer__col" data-aos="fade-down-left" data-aos-delay="600">
                            <div class="f-listaboutus">
                                <p class="footer__col__title">
                                    <strong> {!! __('About us') !!} </strong>
                                </p>
                                <ul class="f-listaboutus__content footer__col__list">
                                    {!!
                                    Menu::renderMenuLocation('footer-column-two-menu', [
                                    'options' => [],
                                    'theme' => true,
                                    'view' => 'col-info-footer',
                                    ])
                                    !!}
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-4 col-6 footer__col" data-aos="fade-down-left" data-aos-delay="800">
                            <div class="f-listinfo-other">
                                <p class="footer__col__title">
                                    <strong> &nbsp </strong>
                                </p>
                                <ul class="f-listinfo-other__content footer__col__list">
                                    {!!
                                    Menu::renderMenuLocation('footer-column-three-menu', [
                                    'options' => [],
                                    'theme' => true,
                                    'view' => 'col-info-footer',
                                    ])
                                    !!}
                                </ul>
                                <div class="footer__col__list--icon pt-4">
                                    @php
                                    $social_network = theme_option("footer_social_network_repeater", []);
                                    if(!blank($social_network)) {
                                    $social_network = json_decode($social_network) ?? [];
                                    }
                                    @endphp

                                    @foreach($social_network as $item)
                                    <a class="__item__icon" href="{{rvMedia::getImageUrl($item[1]->value)}}" title="{{rvMedia::getImageUrl($item[0]->value)}}">
                                        <img width="35" height="35" src="{{rvMedia::getImageUrl($item[2]->value)}}" alt="" />
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer__bottom copyright">
                    <p> {!! theme_option('copyright') !!} </p>
                </div>
            </div>
        </div>
    </div>
</footer>

{!! Theme::footer() !!}
    @if(url()->current()==route('public.single'))
        @includeIf("theme.main::views.components.sidebar",['language'=>true])
    @else
        @includeIf("theme.main::views.components.sidebar")
    @endif

    <div id="fb-customer-chat" class="fb-customerchat"></div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "{{theme_option('facebook_id_sidebar')}}");
        chatbox.setAttribute("attribution", "biz_inbox");
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true
                , version: 'v11.0'
            });
        };
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <script>
        AOS.init();
    </script>

    </body>
</html>
        <!-- Your Plugin chat code -->

