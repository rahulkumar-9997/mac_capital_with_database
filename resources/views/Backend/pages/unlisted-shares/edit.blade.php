@extends('backend.layouts.master')
@section('title','Edit Unlisted Shares')
@push('styles')

@endpush
@section('main-content')
<div class="content">
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4 class="fw-bold">Edit Unlisted Shares</h4>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
            <a href="{{ route('manage-unlisted-shares.index') }}" data-title="Go to List Page" data-bs-toggle="tooltip" class="btn btn-sm btn-purple" data-bs-original-title="Go Back to Previous Page">
                << Go to List Page
            </a>
        </div>
        <div class="accordion-body border-top">
            <form action="{{ route('manage-unlisted-shares.update', $list->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label class="form-label">For Date <span class="text-danger">*</span></label>
                            <input type="text"
                                class="form-control datepicker @error('for_date') is-invalid @enderror"
                                name="for_date"
                                value="{{ old('for_date', $list->for_date) }}"
                                placeholder="Select Date">
                            @error('for_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <table class="table table-bordered" id="shareTable">
                            <thead>
                                <tr>
                                    <th>Script Name</th>
                                    <th>Face Value</th>
                                    <th>Landing Price</th>
                                    <th width="100">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($list->items as $key => $item)
                                <tr>
                                    <td>
                                        <input type="text" name="script_name[]"
                                            class="form-control @error('script_name.'.$key) is-invalid @enderror"
                                            value="{{ old('script_name.'.$key, $item->script_name) }}">
                                        @error('script_name.'.$key)
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" name="face_value[]" class="form-control"
                                        value="{{ old('face_value.'.$key, $item->face_value) }}">
                                    </td>
                                    <td>
                                        <input type="text"
                                            name="landing_price[]"
                                            class="form-control"
                                            value="{{ old('landing_price.'.$key, $item->landing_price) }}">
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm removeRow">Remove</button>
                                    </td>
                                </tr>
                                @endforeach
                                @if($list->items->count() == 0)
                                <tr>
                                    <td>
                                        <input type="text" name="script_name[]" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="face_value[]" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="landing_price[]" class="form-control">
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm removeRow">Remove</button>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="text-end mt-2">
                            <button type="button" class="btn btn-success btn-sm" id="addRow">+ Add More</button>
                        </div>
                    </div>
                </div>
                <div class="mt-4 text-end">
                    <a href="{{ route('manage-unlisted-shares.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
$(document).ready(function(){
    $('#addRow').click(function(){
        let row = `
        <tr>
            <td><input type="text" name="script_name[]" class="form-control" placeholder="Script Name"></td>
            <td><input type="text" name="face_value[]" class="form-control" placeholder="Face Value"></td>
            <td><input type="text" name="landing_price[]" class="form-control" placeholder="Landing Price"></td>
            <td><button type="button" class="btn btn-danger btn-sm removeRow">Remove</button></td>
        </tr>`;
        $('#shareTable tbody').append(row);
    });

    $(document).on('click', '.removeRow', function(){
        if($('#shareTable tbody tr').length > 1){
            $(this).closest('tr').remove();
        } else {
            alert('At least one row required');
        }
    });

});
</script>
<script>
$(document).ready(function(){
    $('.datepicker').flatpickr({
        enableTime: false,
        dateFormat: "Y-m-d"
    });
});
</script>
@endpush