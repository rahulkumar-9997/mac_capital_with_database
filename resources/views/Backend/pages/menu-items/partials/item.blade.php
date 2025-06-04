<li class="menu-item-card" data-id="{{ $item->id }}">
    <div class="menu-item-header">
        <div>
            @if($item->icon)
            <i class="{{ $item->icon }} me-2"></i>
            @endif
            <strong>{{ $item->title }}</strong> -
            @if($item->url)
            URL: {{ $item->url }}
            @elseif($item->route)
            Route: {{ $item->route }}
            @elseif($item->page)
            Page: {{ $item->page->title }}
            @endif
           
        </div>
        <div class="menu-item-actions">
            <a href="{{ route('menu.item.edit', ['menu' => $menu->id, 'item' => $item->id]) }}" 
                class="btn btn-sm btn-info">
                <i class="ti ti-edit"></i>
            </a>
            <form action="{{ route('menu.item.destroy', ['menu' => $menu->id, 'item' => $item->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger show_confirm">
                    <i class="ti ti-trash"></i>
                </button>
            </form>
        </div>
    </div>

    @if($item->children->isNotEmpty())
    <ul class="menu-item-children">
        @foreach($item->children as $child)
            @include('backend.pages.menu-items.partials.item', ['item' => $child, 'menu' => $menu])
        @endforeach
    </ul>
    @endif
</li>