<ul {!! $options !!}>
    @foreach ($menu_nodes as $key => $row)
        <li class="{{ $row->css_class }} @if ($row->url == Request::url()) current @endif @if ($row->has_child) menu-item-has-children @endif">
            @if ($row->has_child)
                <a data-barba href="">
                    <span class="mr-10">{{ $row->title }}</span>
                    <i class="icon icon-chevron-sm-down"></i>
                </a>
            @else
                <a href="{{ $row->url }}" target="{{ $row->target }}">
                    <i class='{{ trim($row->icon_font) }}'></i> {{ $row->title }}
                </a>
            @endif

            @if ($row->has_child)
                {!! Menu::generateMenu([
                    'slug' => $menu->slug,
                    'parent_id' => $row->id,
                    'view' => 'menu.main-menu-child-item',
                    'options' => ['class="subnav"'],
                ]) !!}
            @endif
        </li>
    @endforeach
</ul>
