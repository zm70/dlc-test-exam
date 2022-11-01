@extends('admin.layout.master')
@section('title', 'Products')
@section('link')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Categories</h4>
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Add New Category</h5>
                <div class="card-body">
                    <form method="post" action="{{route('categories.store')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label>Status</label>

                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" name="active" id="activeChecked" checked />
                                    <label class="form-check-label" for="activeChecked"
                                    >Active</label
                                    >
                                </div>
                            </div>

                            <div class="col-md-12 submit-div">
                                <button type="submit" class="btn btn-success">Add</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endsection




