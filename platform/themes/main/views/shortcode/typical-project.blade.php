  <!--css in file common.scss----->
  <div class="box-common-typeicalproject-carousel-wrapper bg-white">
      <div class="container-customize">
          <div class="box-common-typeicalproject-carousel distance-below theme-customize-header-section">
              <div class="theme-customize-header-section__header distance-below">
                  <h2 class="theme-customize-header-section__header__title">
                      {{ __("Typical projects") }}
                  </h2>
                  <p class="theme-customize-header-section__header__des mb-0">
                      <span>
                          {!! __("Description typical projects") !!}
                      </span>
                      <a class="btn-read-more" href="{{route('public.single')."/".get_page_by_reference(theme_option('project_id'))}}" title="{{ __("Read more") }}"> {{ __("Read more") }} </a>
                  </p>
              </div>

              <div class="splide" id="box-common-typeicalproject-carousel__carousel">
                  <div class="splide__slider">
                      <!-- relative -->
                      <div class="splide__track">
                          <ul class="splide__list">
                              @if(get_feadture_projects( theme_option('number_typical_projects') ))
                              @foreach(get_feadture_projects(theme_option('number_typical_projects')) as $project)
                              <li class="splide__slide">
                                  <div class="splide__slide__img">
                                      <a href="{{$project->url}}" title="{{$project->name}}">
                                          <img width="410" height="440" src="{{rvMedia::getImageUrl($project->images)}}" alt="ảnh slider" />
                                      </a>
                                  </div>
                                  <div class="splide__slide__content">
                                      <h3 class="splide__slide__content__title">
                                          <a href="{{$project->url}}" title="{{$project->name}}">
                                              {!! $project->name !!}
                                          </a>
                                      </h3>
                                      <div class="splide__slide__des des-children">
                                          {!! $project->description !!}
                                      </div>
                                  </div>
                              </li>
                              @endforeach
                              @endif
                          </ul>
                      </div>
                  </div>

                  <div>
                      <!-- extra contents -->
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--end css in file common.scss----->
