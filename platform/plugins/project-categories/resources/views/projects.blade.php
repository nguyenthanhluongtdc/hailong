<div id="projects-page">
    <div class="section-banner-wrapper">
        @includeIf("theme.main::views.components.breadcrumb")
        <div class="container-customize">
            <div class="section-banner">
                <div class="theme-customize-header-section__header">
                    <h1 class="theme-customize-header-section__header__title">
                        {!! __('Title Project') !!}
                    </h1>
                </div>
                <div class="theme-customize-header-section__tabs">
                    <ul class="theme-customize-header-section__tabs__list mb-0">
                        {!!
                            Menu::renderMenuLocation('project-categories-menu', [
                                'options' => [],
                                'theme'   => true,
                                'view' => 'introduce-tabs',
                            ])
                        !!}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="project-wrapper">
        <div class="container-customize">
            <div class="project-wrapper-section">
                <div class="tab-content" id="Tab-project">
                    <div class="tab-pane fade show active" id="tab-all" role="tabpanel" aria-labelledby="tab-all-tab">
                        <div class="row">
                            @if(!empty($projects))
                                @foreach($projects as $project)
                                    <div class="col-lg-4 col-sm-6 col-12 mb-lg-0">
                                        <div class="project">
                                            <a href="/projects-detail" class="project__link" title="Nhà kính 2 tầng đẹp nhất">
                                                <img width="550" height="400" class="" src="{{rvMedia::getImageUrl($project->images)}}" alt=">Nhà kính 2 tầng đẹp nhất 2018 được nhiều chủ đầu tư yêu thích">
                                                <div class="project__title ">
                                                    <h4 class="__text-20">
                                                        {!! $project->name !!}
                                                    </h4>
                                                </div>
                                                <div class="project__content __text-18">
                                                    <p> 
                                                        {!! $project->description !!}
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @includeIf("theme.main::views.components.pagination-project",['datas'=>$projects])
        </div>
    </div>

    @includeIf("theme.main::views.components.form-signup")
   
</div>