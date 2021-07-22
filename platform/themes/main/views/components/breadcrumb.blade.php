<div class="section-breadcrumb">
    <div class="container-customize">
        <ul class="section-breadcrumb__list py-4">
            @foreach (Theme::breadcrumb()->getCrumbs() as $i => $crumb)
                @if ($i != (count(Theme::breadcrumb()->getCrumbs()) - 1))
                    <li class="__breadcrumb__item">
                        <a class="__breadcrumb__link" href="{{ $crumb['url'] }}" title="Trang chu"> {!! $crumb['label'] !!} </a> 
                    </li>
                @else
                    <li class="__breadcrumb__item active">
                        {!! $crumb['label'] !!}
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>