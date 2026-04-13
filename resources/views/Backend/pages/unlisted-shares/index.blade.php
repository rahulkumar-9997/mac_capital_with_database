@extends('backend.layouts.master')
@section('title','Unlisted Shares List')
@push('styles')
<link rel="stylesheet" href="{{asset('backend/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/plugins/tabler-icons/tabler-icons.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/dataTables.bootstrap5.min.css')}}">
@endpush
@section('main-content')
<div class="content">
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4 class="fw-bold">Unlisted Shares List</h4>
            </div>
        </div>

        <div class="page-btn">
            <a href="{{ route('manage-unlisted-shares.create')}}" class="btn btn-primary"><i class="ti ti-circle-plus me-1"></i>Add Unlisted Shares</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>For Date</th>
                            <th>Script Name</th>
                            <th>Face Value</th>
                            <th>Landing Price</th>
                            <th width="120">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($lists->count() > 0)
                            @foreach($lists as $list)
                                @if($list->items->count() > 0)
                                    @foreach($list->items as $key => $item)
                                        <tr>
                                            @if($key == 0)
                                                <td rowspan="{{ $list->items->count() }}">
                                                    {{ \Carbon\Carbon::parse($list->for_date)->format('d-m-Y') }}
                                                </td>
                                            @endif
                                            <td>{{ $item->script_name ?? '-' }}</td>
                                            <td>{{ $item->face_value ?? '-' }}</td>
                                            <td>{{ $item->landing_price ?? '-' }}</td>
                                            @if($key == 0)
                                                <td rowspan="{{ $list->items->count() }}">
                                                    <div class="edit-delete-action d-flex gap-2">

                                                        <a class="btn btn-outline-primary btn-sm"
                                                        href="{{ route('manage-unlisted-shares.edit', $list->id) }}">
                                                            <i class="ti ti-pencil"></i>
                                                        </a>
                                                        <form action="{{ route('manage-unlisted-shares.destroy', $list->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                            class="btn btn-outline-danger btn-sm show_confirm">
                                                            <i class="ti ti-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td>{{ \Carbon\Carbon::parse($list->for_date)->format('d-m-Y') }}</td>
                                        <td colspan="4" class="text-center">No Scripts Found</td>
                                    </tr>
                                @endif
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center">No Data Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div class="mt-3 mb-3 d-flex justify-content-end">
                    {{ $lists->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>            
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
   $(document).ready(function() {
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
</script>
@endpush