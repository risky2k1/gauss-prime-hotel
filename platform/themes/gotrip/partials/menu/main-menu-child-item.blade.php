<ul {!! $options !!}>
    <li class="subnav__backBtn js-nav-list-back">
        <a href="#"><i class="icon icon-chevron-sm-down"></i> {{$menu->title}}</a>
    </li>
    @foreach ($menu_nodes as $key => $row)
        <li class="{{ $row->css_class }} @if ($row->url == Request::url()) current @endif">
            <a href="{{ $row->url }}" target="{{ $row->target }}">
                {{ $row->title }}
            </a>
        </li>
    @endforeach
</ul>
