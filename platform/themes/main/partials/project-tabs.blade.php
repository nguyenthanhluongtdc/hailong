@foreach ($menu_nodes as $key => $row)
    <li class="__tabs__item mr-5" role="project">
        <a class="__tabs__link nav-link" id="project-home-tab" data-toggle="tab" role="tab" aria-controls="tab{{$key}}" aria-selected="true" href="#tab{{$key}}" title="Tất Cả"> {{$row->name}} </a>
    </li>
@endforeach
