<div id="sidebar-main" class="d-md-block d-none" data-aos="fade-down">
     <div class="box box-center">
        @php
            $supportedLocales = array_reverse(Language::getSupportedLocales()) ;
            $showRelated = setting('language_show_default_item_if_current_version_not_existed', true);
            $currentLocate = Arr::get($supportedLocales, Language::getCurrentLocale(), []);
        @endphp
        <button class="box__item">
            <a rel="alternate" hreflang="{{ Language::getCurrentLocale() }}" class="box__item__icon language_current text-uppercase" href="{{ $showRelated ? Language::getLocalizedURL(Language::getCurrentLocale()) : url(Language::getCurrentLocale()) }}">
                <span class="text-uppercase"> {{ $currentLocate['lang_locale']=='vi'?'VN': $currentLocate['lang_locale'] }} </span>
            </a>
            <span class="_char"> | </span>
            @foreach (array_diff_key($supportedLocales, [Language::getCurrentLocale() => "xy"]) as  $localeCode => $properties)
                <a rel="alternate" hreflang="{{ $localeCode }}" class="box__item__icon language_current text-uppercase {{Language::getCurrentLocale()==$localeCode?'active':''}}" href="{{ $showRelated ? Language::getLocalizedURL($localeCode) : url($localeCode) }}">
                    <span class="text-uppercase"> {{ $properties['lang_locale']=='vi'?'VN':$properties['lang_locale'] }} </span>
                </a>
                <span class="_char"> | </span>
            @endforeach
        </button>

        <button class="box__item button-zalo" >
            <span class="box__item__text sub-zalo">
                <b> Zalo</b>
                <b> Code</b>
            </span>

            <div class="zalocode">
                <img src="{{rvMedia::getImageUrl(theme_option('image_zalocode_sidebar'))}}" alt="Zalo code" />
            </div>

        </button>

        <button class="box__item">
            <span class="box__item__icon"> <i class="fas {{theme_option('icon_phone_sidebar')}}"></i> </span>
            @php
                $phone_number_list = theme_option("phone_number_list", []);
                if(!blank($phone_number_list)) {
                $phone_number_list = json_decode($phone_number_list) ?? [];
            }
            @endphp

            @if(!blank($phone_number_list && !empty($phone_number_list)))
                <div class="box__item__content">
                    @foreach($phone_number_list as $item)
                    <a href="tel: {{$item[0]->value}}" title="{{$item[0]->value}}">
                        {{$item[0]->value}}
                    </a>
                    <span class="char_ mx-2">
                        |
                    </span>
                    @endforeach
                </div>
            @endif
        </button>

        <button class="box__item">
            <a class="d-flex align-items-center" href="mailto: {{theme_option('text_email_sidebar')}}">
                <i class="box__item__icon {{theme_option('icon_email_sidebar')}}"></i>
                <span class="text"> Email </span>
            </a>
        </button>

        @if(theme_option('icon_message_sidebar')!=null)
        <button class="box__item">
            <span class="box__item__icon fb-customerchat messenger">
                <i class="{{theme_option('icon_message_sidebar')}}"></i>
            </span>
            <span class="text"> Messenger </span>
        </button>
        @endif

        <button class="box__item back-top" id="backtop">
            <span class="box__item__icon"><i class="fal fa-arrow-up"></i> </span>
            <div class="box__item__content d-block">
                <span class="text-top"> TOP </span>
            </div>
        </button>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap&key=AIzaSyDf0FXTYTnbEEloq9qSLI19ff43seWRbtw&language=vi&libraries=places&region=vn" defer></script>

</div>

<script>
    var btnBackTop = $('#backtop');
    var btnZalo = $('.sub-zalo');
    var btnmessenger = $('.messenger')
    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btnBackTop.addClass('show');
        } else {
            btnBackTop.removeClass('show');
        }
    });
    btnmessenger.on('click', function(e) {
        $(".messenger").on("click", function() {
            FB.CustomerChat.show();
        });
    });

    btnBackTop.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });

    btnZalo.hover(function() {
        $('.zalocode').show('slow');

        // $('.icon-close').click(function() {
            
        // })

        // $("body").click(function() {
        //     $(".zalocode").hide('slow')
        // });

        // $(".zalocode").click(function(e) {
        //     e.stopPropagation();
        // });
    },function(){
        $('.zalocode').hide('slow');
    })

</script>
