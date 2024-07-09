{{--@dd($menu,$menu_nodes)--}}
<div class="col-auto">
    <h5 class="text-16 fw-500 mb-30">Company</h5>
    <div class="d-flex y-gap-10 flex-column">
        @foreach ($menu_nodes as $key => $row)
            <a href="{{ $row->url }}" target="{{ $row->target }}">
                {{ $row->title }}
            </a>
        @endforeach
    </div>
</div>
