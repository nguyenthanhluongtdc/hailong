<ul class="f-listinfo__content footer__col__list">
    @if(!empty($menu_nodes[0]))
    @foreach($menu_nodes as $row)
        <li>
            <a href="{{$row->url}}" title="{{$row->name}}"> {{$row->name}} </a>
        </li>
    @endforeach
    @endif
</ul>
