@php $fade = ['right','down','left']; @endphp

    <div class="section-our-policy-wrapper">
        <div class="container-customize">
            <div class="section-our-policy distance-y _fsx20r16">
                <div class="row mx-lg-n5 mx-n3">
                    @php
                    $slogans = theme_option("slogan_repeater", []);
                    if(!blank($slogans)) {
                    $slogans = json_decode($slogans) ?? [];
                    }
                    @endphp

                    @foreach ($slogans as $key => $item)
                    <div class="col-sm-4 px-lg-5 px-3" data-aos="fade-{{$fade[$key]}}">
                        <div class="section-our-policy__col">
                            <div class="section-our-policy__col__icon">
                                <i class="{{ $item[0]->value ?? "" }}"></i>
                            </div>
                            <div class="section-our-policy__col__content">
                                <h3 class="__content__title">{{ $item[1]->value ?? "" }}</h3>
                                <p class="__content__des line__children">{{ $item[2]->value ?? "" }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>