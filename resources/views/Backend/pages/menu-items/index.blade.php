@extends('backend.layouts.master')
@section('title','Menu Item List')
@push('styles')
<link rel="stylesheet" href="{{asset('backend/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/plugins/tabler-icons/tabler-icons.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/dataTables.bootstrap5.min.css')}}">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<style>
    .menu-items-list {
        list-style: none;
        padding-left: 0;
    }

    .menu-item-card {
        background: #fff;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        margin-bottom: 5px;
        padding: 5px 15px 5px 15px;
        cursor: move;
    }

    .menu-item-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .menu-item-children {
        margin-left: 30px;
        margin-top: 10px;
    }

    .menu-item-actions {
        display: flex;
        gap: 10px;
    }
</style>
@endpush

@section('main-content')
<div class="content">
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4 class="fw-bold">Menu Items: {{ $menu->name }}</h4>
            </div>
        </div>

    </div>

    <!-- /product list -->
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">


        </div>
        <div class="card-body p-3">
            <form action="{{ route('menu.item.store', $menu->id) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="mb-3">
                            <label for="type" class="form-label">Link Type</label>
                            <select name="type" id="type" class="form-control form-select" onchange="toggleFields(this.value)">
                                <option value="url">Custom URL</option>
                                <option value="route">Route</option>
                                <option value="page">Page</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-12" id="url-field">
                        <div class="mb-3">
                            <label for="url" class="form-label">URL</label>
                            <input type="text" name="url" id="url" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 d-none" id="route-field">
                        <div class="mb-3">
                            <label for="route" class="form-label">Route</label>
                            <input type="text" name="route" id="route" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 d-none" id="page-field">
                        <div class="mb-3">
                            <label for="page_id" class="form-label">Page</label>
                            <select name="page_id" id="page_id" class="form-control form-select">
                                @foreach($pages as $page)
                                <option value="{{ $page->id }}">{{ $page->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="mb-3">
                            <label for="parent_id" class="form-label">Parent Item</label>
                            <select name="parent_id" id="parent_id" class="form-select form-control">
                                <option value="">-- No Parent --</option>
                                @foreach($menu->allItems as $item)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-sm-6 col-12">
                        <div class="mb-3">
                            <label for="icon" class="form-label">Icon (optional)</label>
                            <input type="text" name="icon" id="icon" class="form-control" placeholder="e.g. ti ti-home">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="mb-3">
                            <label for="target" class="form-label">Target</label>
                            <select name="target" id="target" class="form-control">
                                <option value="_self">Same Tab</option>
                                <option value="_blank">New Tab</option>
                            </select>
                        </div>
                    </div>
                 </div>
                <button type="submit" class="btn btn-primary">Add Item</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
            
        </div>
        <div class="card-body p-3">
            @if($menuItems->isEmpty())
                <p>No menu items yet.</p>
            @else
                <ul class="menu-items-list" id="sortable-menu">
                    @foreach($menuItems as $item)
                        @include('backend.pages.menu-items.partials.item', ['item' => $item, 'menu' => $menu])
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    <!-- /product list -->
</div>

@endsection
@push('scripts')
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<script src="{{asset('backend/assets/js/jquery.ui.touch-punch.min.js')}}"></script> 
<!-- For mobile touch support -->

<script>
    $(document).ready(function() {
        initSortableMenu();
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();

            Swal.fire({
                title: `Are you sure you want to delete this ${name}?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "Cancel",
                dangerMode: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });

        
    });

    function initSortableMenu() {
        $("#sortable-menu").sortable({
            items: "> li.menu-item-card",
            handle: ".menu-item-header", 
            placeholder: "ui-sortable-placeholder",
            forcePlaceholderSize: true,
            opacity: 0.6,
            tolerance: "pointer",
            update: function(event, ui) {
                saveMenuOrder();
            }
        });

        $(".menu-item-children").sortable({
            items: "> li.menu-item-card",
            handle: ".menu-item-header",
            placeholder: "ui-sortable-placeholder",
            forcePlaceholderSize: true,
            connectWith: ".menu-item-children",
            opacity: 0.6,
            tolerance: "pointer",
            update: function(event, ui) {
                saveMenuOrder();
            }
        });
        $(".menu-item-children, #sortable-menu").disableSelection();
    }

    function saveMenuOrder() {
        var menuId = {{ $menu->id }};
        var order = [];
        $('#sortable-menu > li.menu-item-card').each(function(index) {
            var itemId = $(this).data('id');
            order.push({
                id: itemId,
                order: index + 1,
                parent_id: null
            });
            $(this).find('> .menu-item-children > li.menu-item-card').each(function(childIndex) {
                var childId = $(this).data('id');
                order.push({
                    id: childId,
                    order: childIndex + 1,
                    parent_id: itemId
                });
            });
        });
        $.ajax({
            url: "{{ route('menus.items.order', $menu->id) }}",
            type: 'POST',
            data: {
                _token: "{{ csrf_token() }}",
                order: order
            },
            success: function(response) {
                if (response.success) {
                    Toastify({
                        text: "Menu order updated successfully!",
                        duration: 3000,
                        close: true,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                        stopOnFocus: true,
                    }).showToast();
                } else {
                    Toastify({
                        text: "Failed to update menu order!",
                        duration: 3000,
                        close: true,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "linear-gradient(to right,rgb(176, 44, 0), #96c93d)",
                        stopOnFocus: true,
                    }).showToast();
                }
            },
            error: function(xhr) {
                Toastify({
                    text: "An error occurred while updating menu order",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "linear-gradient(to right,rgb(176, 44, 0), #96c93d)",
                    stopOnFocus: true,
                }).showToast();
                console.error(xhr.responseText);
            }
        });
    }
    function toggleFields(type) {
        document.getElementById('url-field').classList.add('d-none');
        document.getElementById('route-field').classList.add('d-none');
        document.getElementById('page-field').classList.add('d-none');
        
        if (type === 'url') {
            document.getElementById('url-field').classList.remove('d-none');
        } else if (type === 'route') {
            document.getElementById('route-field').classList.remove('d-none');
        } else if (type === 'page') {
            document.getElementById('page-field').classList.remove('d-none');
        }
    }
</script>
@endpush