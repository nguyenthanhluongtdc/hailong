<div class="box-common-showroom-wrapper">
    <div class="container-customize">
        <div class="box-common-showroom distance-below theme-customize-header-section">
            <div class="theme-customize-header-section__header">
                <h2 class="theme-customize-header-section__header__title" data-aos="fade-right">
                    {{ $title ?? __("Showroom Hailong Glass") }}
                </h2>
                <p class="theme-customize-header-section__header__des mb-4" data-aos="fade-left" data-aos-delay="200">
                    {{ $title ?? __("Glass Showroom List (Click on the address to see the map)") }}
                </p>
            </div>

            @php
                $showrooms = get_showrooms();
                $regions = get_regions();
                $tabShowrooms = $showrooms->groupBy('region');
                $factories = $showrooms->where('is_factory', 1);
            @endphp

            <div class="box-common-showroom__content">
                <div class="row">
                    @php $i = 0; @endphp
                    <div class="col-lg-7 col-12" data-aos="zoom-in">
                        <div class="box__tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                @foreach($regions as $key => $region)
                                    @php ++$i @endphp
                                    <li class="nav-item box__tabs__header" role="presentation" data-aos="fade-left" data-aos-delay="{{$i*300}}" >
                                        <button class="nav-link px-0 {{$key == 'north' ?'active':''}}" id="col-tab{{$key}}-tab" data-bs-toggle="tab" data-bs-target="#col-tab{{$key}}" type="button" role="tab" aria-controls="col-tab{{$key}}" aria-selected="true">
                                            {{ $region }}
                                        </button>
                                    </li>
                                @endforeach
                            </ul>

                            <div class="tab-content box__tabs__content" id="myTabContent">
                                @foreach($regions as $key => $region)
                                    <div class="tab-pane tab-showroom fade  {{$key == 'north' ?'show active':''}}" id="col-tab{{$key}}" role="tabpanel" aria-labelledby="col-tab{{$key}}-tab">
                                        @if(isset($tabShowrooms[$key]))
                                            @foreach($tabShowrooms[$key] as $keyy => $showroom)
                                                <div class="line__item">
                                                    <div>
                                                        <a href="#" title="{{ $showroom->address ?? '' }}" class="address link-map" data-lat="{{ $showroom->url_google_map ?? '' }}" data-toggle="modal" data-target="#myMapModal">
                                                            <b> {{ $showroom->address ?? '' }} </b>
                                                        </a>
                                                    </div>
                                                    <div class="des-children">
                                                        <span class="phone">
                                                            {{ $showroom->phones ?? '' }}
                                                        </span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12" data-aos="zoom-in">
                        <div class="box__infoOther">
                            <div class="theme-customize-header-section__header pt-0">
                                <h3 class="theme-customize-header-section__header__title text-white mb-2" data-aos="fade-right">
                                    {{ $title_factory ?? __("Factory") }}
                                </h3>
                                <p class="box__infoOther__header__des des-children" data-aos="fade-left">
                                    {{ $description_factory ?? __("Coach Park Hang-seo's teachers and students will lose their home field advantage if the away teams are not prioritized for isolation.") }}
                                </p>
                            </div>

                            <div class="box__infoOther__list">
                                @php $i = 0; @endphp
                                @foreach($factories as $keyy => $showroom)
                                @php ++$i; @endphp
                                    <div class="line__item">
                                        <div>
                                            <a href="#" title="{{ $showroom->address ?? '' }}" class="address link-map" data-lat="{{ $showroom->url_google_map ?? '' }}" data-toggle="modal" data-target="#myMapModal">
                                                <b> {{ $showroom->address ?? '' }} </b>
                                            </a>
                                        </div>
                                        <div class="des-children">
                                            <span class="phone">
                                                {{ $showroom->phones ?? '' }}
                                            </span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>