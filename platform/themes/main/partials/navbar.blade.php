<nav class="navbar navbar-expand-lg pb-0 px-0 navbar-light">
    <div class="container-customize-header align-items-end">
        <a class="link-theme-customize text-decoration-none col-lg-2 col-index-3 col-9 pb-2 pl-0" href="/" title="Logo">
            <img width="370" height="110" class="mw-100" src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="Logo" />
        </a>
        <button class="navbar-toggler border-0 py-sm-1 px-sm-2 p-0 mb-3 mr-lg-0 mr-md-5 " type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fal fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse align-items-end mb-lg-0 mb-3 col-lg-8 col-index-9" id="navbarToggler">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0 align-items-lg-end">
                @if(!empty($menu_nodes[0]))
                @foreach($menu_nodes as $key => $row)
                <li class="nav-item">
                    <a class="nav-link" href="{{$row->url}}"> {{$row->title}} </a>
                </li>
                @endforeach
                @endif
                <li class="bilingual">
                    <a class="en" href="#" title=""> EN </a>
                    <a class="vn active" href="#" title=""> VN </a>
                </li>
            </ul>
        </div>
        <div class="col-lg-2 mr-auto position-relative">
            <div class="box-sub">
                <span> CSKH24/7: </span> <b> 19004696 </b>
            </div>
        </div>
    </div>
</nav>

<script>
   jQuery(function($) {
        var path = window.location.href; 
        // because the 'href' property of the DOM element is the absolute path
        $('.navbar-nav li a').each(function() {
            if (this.href === path) {
            $(this).addClass('active');
            }
        });
    });
</script>
