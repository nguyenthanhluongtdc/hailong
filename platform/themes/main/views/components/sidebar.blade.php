<div id="sidebar-main" class="d-md-block d-none">

    <div class="box box-center">
        @if(isset($zalocode))
            <button class="box__item button-zalo">
                <span class="box__item__text sub-zalo">
                    <b> Zalo</b>
                    <b> Code</b>
                </span>

                <div class="zalocode">
                    <i class="fas fa-times-circle icon-close"></i>
                    <img src="{{Theme::asset()->url('images/contact/zalocode.jpg')}}" alt="" />
                </div>

            </button>
        @endif

        <button class="box__item">
            <span class="box__item__icon language_current text-uppercase"> 
                @if(Language::getCurrentLocale()=='vi')
                    VN
                @else 
                    {{Language::getCurrentLocale()}}
                @endif
            </span>
            <div class="box__item__content">
            </div>
        </button>

        <button class="box__item">
            <span class="box__item__icon"> <i class="fas fa-phone-alt"></i> </span>
            <div class="box__item__content">
                <a href="tel: 09892223222" title="0989.22.23.222" class="mr-2"> 0989.22.23.222 </a> |
                <a href="tel: 09892223222" title="0989.22.23.222" class="ml-2"> 0989.22.23.222 </a>
            </div>
        </button>

        <button class="box__item">
            <a class="d-flex align-items-center" href="mailto: haillong@gmail.com">
                <i class="box__item__icon fas fa-envelope"></i>
                <span class="text"> Email </span>
            </a>
        </button>

        <button class="box__item"  >
            <span class="box__item__icon fb-customerchat messenger"  > <i class="fas fa-comment-alt-lines"></i> </span>

        </button>

        <button class="box__item back-top" id="backtop">
            <span class="box__item__icon"><i class="fal fa-arrow-up"></i> </span>

            <div class="box__item__content d-block">
                <span class="text-top"> TOP </span>
            </div>
        </button>
    </div>

     <script
        src="https://maps.googleapis.com/maps/api/js?callback=initMap&key=AIzaSyDf0FXTYTnbEEloq9qSLI19ff43seWRbtw&language=vi&libraries=places&region=vn"
        defer></script>

</div>

<script>
    var btnBackTop = $('#backtop');
    var btnZalo = $('.sub-zalo');
    var btnmessenger =$('.messenger')
    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btnBackTop.addClass('show');
        } else {
            btnBackTop.removeClass('show');
        }
    });
    btnmessenger.on('click', function(e) {
        $(".messenger").on("click", function () {
        FB.CustomerChat.show();
    });
    });

    btnBackTop.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });

    btnZalo.hover(function(){
        $('.zalocode').show('slow');
        
        $('.icon-close').click(function(){
           $('.zalocode').hide('slow');
        })

        $("body").click(function(){
            $(".zalocode").hide('slow')
        });

        $(".zalocode").click(function(e){
            e.stopPropagation();
        });
    })

</script>
