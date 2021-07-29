<div class="section-breadcrumb">
    <div class="container-customize">
        <ul class="section-breadcrumb__list py-4">
            @foreach (Theme::breadcrumb()->getCrumbs() as $i => $crumb)
                @if ($i != (count(Theme::breadcrumb()->getCrumbs()) - 1))
                    <li class="__breadcrumb__item" data-aos="fade-down" data-aos-delay="{{$i*200}}">
                        <a class="__breadcrumb__link" href="{{ $crumb['url'] }}" title="{!! $crumb['label'] !!}"> {!! $crumb['label'] !!} </a> 
                    </li>
                @else
                    <li class="__breadcrumb__item active" data-aos="fade-down" data-aos-delay="{{$i*200}}">
                        {!! $crumb['label'] !!}
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>