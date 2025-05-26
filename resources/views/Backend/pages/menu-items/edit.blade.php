@extends('backend.layouts.master')
@section('title','Edit Menu Item')
@push('styles')
<link rel="stylesheet" href="{{asset('backend/assets/plugins/tabler-icons/tabler-icons.css')}}">
@endpush

@section('main-content')
<div class="content">
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4 class="fw-bold">Edit Menu Item: {{ $item->title }}</h4>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <a href="{{ route('menus.items', $menu->id) }}" class="btn btn-sm btn-purple">
                &lt;&lt; Back to Menu Items
            </a>
        </div>
        <div class="card-body p-3">
            <form action="{{ route('menu.item.update', ['menu' => $menu->id, 'item' => $item->id]) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title*</label>
                            <input type="text" name="title" id="title" class="form-control" 
                                   value="{{ old('title', $item->title) }}" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="mb-3">
                            <label for="type" class="form-label">Link Type*</label>
                            <select name="type" id="type" class="form-control" onchange="toggleFields(this.value)">
                                <option value="url" {{ $item->url ? 'selected' : '' }}>Custom URL</option>
                                <option value="route" {{ $item->route ? 'selected' : '' }}>Route</option>
                                <option value="page" {{ $item->page_id ? 'selected' : '' }}>Page</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6 col-12" id="url-field" style="{{ $item->url ? '' : 'display:none' }}">
                        <div class="mb-3">
                            <label for="url" class="form-label">URL*</label>
                            <input type="text" name="url" id="url" class="form-control" 
                                   value="{{ old('url', $item->url) }}" {{ $item->url ? 'required' : '' }}>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12" id="route-field" style="{{ $item->route ? '' : 'display:none' }}">
                        <div class="mb-3">
                            <label for="route" class="form-label">Route*</label>
                            <input type="text" name="route" id="route" class="form-control" 
                                   value="{{ old('route', $item->route) }}" {{ $item->route ? 'required' : '' }}>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12" id="page-field" style="{{ $item->page_id ? '' : 'display:none' }}">
                        <div class="mb-3">
                            <label for="page_id" class="form-label">Page*</label>
                            <select name="page_id" id="page_id" class="form-control" {{ $item->page_id ? 'required' : '' }}>
                                <option value="">-- Select Page --</option>
                                @foreach($pages as $page)
                                <option value="{{ $page->id }}" {{ $item->page_id == $page->id ? 'selected' : '' }}>
                                    {{ $page->title }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="mb-3">
                            <label for="parent_id" class="form-label">Parent Item</label>
                            <select name="parent_id" id="parent_id" class="form-control">
                                <option value="">-- No Parent --</option>
                                @foreach($menuItems as $menuItem)
                                    @if($menuItem->id != $item->id)
                                    <option value="{{ $menuItem->id }}" {{ $item->parent_id == $menuItem->id ? 'selected' : '' }}>
                                        {{ $menuItem->title }}
                                    </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <div class="mb-3">
                            <label for="icon" class="form-label">Icon (optional)</label>
                            <input type="text" name="icon" id="icon" class="form-control" 
                                   value="{{ old('icon', $item->icon) }}" placeholder="e.g. ti ti-home">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="mb-3">
                            <label for="target" class="form-label">Target</label>
                            <select name="target" id="target" class="form-control">
                                <option value="_self" {{ $item->target == '_self' ? 'selected' : '' }}>Same Tab</option>
                                <option value="_blank" {{ $item->target == '_blank' ? 'selected' : '' }}>New Tab</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center justify-content-end mb-4">
                            <a href="{{ route('menus.items', $menu->id) }}" class="btn btn-secondary me-2">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update Item</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function toggleFields(type) {
        // Hide all fields first
        document.getElementById('url-field').style.display = 'none';
        document.getElementById('route-field').style.display = 'none';
        document.getElementById('page-field').style.display = 'none';
        
        // Remove required attributes
        document.getElementById('url').required = false;
        document.getElementById('route').required = false;
        document.getElementById('page_id').required = false;
        
        // Show the selected field and make it required
        if (type === 'url') {
            document.getElementById('url-field').style.display = 'block';
            document.getElementById('url').required = true;
        } else if (type === 'route') {
            document.getElementById('route-field').style.display = 'block';
            document.getElementById('route').required = true;
        } else if (type === 'page') {
            document.getElementById('page-field').style.display = 'block';
            document.getElementById('page_id').required = true;
        }
    }
    
    // Initialize fields based on current type
    document.addEventListener('DOMContentLoaded', function() {
        const type = document.getElementById('type').value;
        toggleFields(type);
    });
</script>
@endpush