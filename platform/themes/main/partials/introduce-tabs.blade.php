@foreach ($menu_nodes as $key => $row)
    <li class="__tabs__item {{ $row->css_class }} @if ($row->url == Request::url()) active @endif">
        <a class="__tabs__link" href="{{ $row->url }}" target="{{ $row->target }}" title="{{ $row->name }}">
            {{$row->name}}
        </a>
    </li>
@endforeach