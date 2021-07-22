<div id="sidebar-main" class="d-md-block d-none">
    <div class="box box-center">
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
            <span class="box__item__icon" id="fb-root" > <i class="fas fa-comment-alt-lines"></i> </span>

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

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btnBackTop.addClass('show');
        } else {
            btnBackTop.removeClass('show');
        }
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