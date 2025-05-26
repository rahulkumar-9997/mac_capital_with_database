
@php
    $depth = $page->depth ?? 0;
@endphp

<tr class="page-row" style="--depth: {{ $depth }};">
    <td class="page-title-column">
        <div class="d-flex align-items-center">
            @if($depth > 0)
                <span class="tree-line"></span>
            @endif
            <span class="page-title-text">
                {!! $depth > 0 ? str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', $depth) . '↳ ' : '' !!}
                {{ $page->title }}
            </span>
        </div>
    </td>
    <!-- <td>{{ $page->slug }}</td> -->
    <td>{{ $page->route_name }}</td>
    <td>{{ $page->parent ? $page->parent->title : '-' }}</td>
    <td>{{ $page->order }}</td>
    <td>
        <span class="badge bg-{{ $page->is_active ? 'success' : 'secondary' }}">
            {{ $page->is_active ? 'Active' : 'Inactive' }}
        </span>
    </td>
    <td class="action-table-data">
        <div class="edit-delete-action d-flex gap-2">
            <a class="btn btn-outline-info btn-sm" href="{{ route('pages.edit', $page) }}">
                <i class="ti ti-eye"></i>
            </a>
            <a class="btn btn-outline-primary btn-sm" href="{{ route('pages.edit', $page) }}">
                <i class="ti ti-pencil"></i>
            </a>
            <form action="{{ route('pages.destroy', $page) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger btn-sm show_confirm">
                    <i class="ti ti-trash"></i>
                </button>
            </form>
        </div>
    </td>
</tr>

@if($page->children && $page->children->count())
    @foreach($page->children as $child)
        @php $child->depth = $depth + 1; @endphp
        @include('backend.pages.page-content.partials.page-row', ['page' => $child])
    @endforeach
@endif
