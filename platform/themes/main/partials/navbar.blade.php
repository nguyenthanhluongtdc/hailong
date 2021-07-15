<nav class="navbar navbar-expand-lg pb-0 px-0 navbar-light">
    <div class="container-customize important container align-items-end">
        <a class="link-theme-customize text-decoration-none col-lg-3 col-9 pb-3 pl-0" href="/" title="Logo">
            <img class="mw-100" src="{{Theme::asset()->url('images/hailong/logo.png')}}" alt="Logo" />
        </a>
        <button class="navbar-toggler py-sm-1 px-sm-2 p-0 mb-3" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse align-items-end mb-lg-0 mb-3" id="navbarToggler">
            <ul class="navbar-nav pl-5 mr-auto mt-2 mt-lg-0 align-items-lg-end">
            @if(!empty($menu_nodes[0]))
                @foreach($menu_nodes as $key => $row)
                <li class="nav-item {{$key==0?'active':''}}">
                    <a class="nav-link" href="{{$row->url}}"> {{$row->title}} </a>
                </li>
                @endforeach
            @endif
                <li class="bilingual">
                    <a class="en active" href="#"> EN </a>
                    <a class="vn" href="#"> VN </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
