
@php $projects = get_all_projects(theme_option('number_projects_page_main')); @endphp

<div id="projects-page">
    @includeIf("theme.main::views.components.tabs-banner",['title'=> 'Title Project','menu'=>'project-categories-menu'])
    
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
                                        <a href="{{$project->url}}" class="project__link" title="{{$project->name}}">
                                            <img width="550" height="400" class="" src="{{rvMedia::getImageUrl($project->image)}}" alt=">Nhà kính 2 tầng đẹp nhất 2018 được nhiều chủ đầu tư yêu thích">
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
            @if(!empty($projects))
                @includeIf("theme.main::views.components.pagination-project",['datas'=>$projects])
            @endif
        </div>
    </div>

    @includeIf("theme.main::views.components.form-signup")
   
</div>