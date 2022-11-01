@extends('admin.layout.master')
@section('title', 'Products')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Categories</h4>
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <div>
                    <h5 class="card-header list-title-panel">Categories List</h5>
                    <a type="button" class="btn btn-info add-btn-panel" href="{{route('categories.create')}}">Add Category</a>
                </div>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$category->name}}</strong></td>
                                <td>
                                    <select class="form-control" name="active" onchange="changeStatus(this,{{$category->id}})">
                                        <option value="1" @if($category->active == 1) selected @endif>Active</option>
                                        <option value="0" @if($category->active == 0) selected @endif>Inactive</option>
                                    </select>
                                <td>
                                    <a class="btn btn-warning">Edit</a>
                                    <a class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$categories->links()}}
                </div>
            </div>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
@endsection
@section('script')
    <script src="/admin/assets/js/notify-1.js"></script>
    <script src="/admin/assets/js/notify-1.min.js"></script>
    <script>
        function changeStatus(status,id) {
            let newStatus = status.value;
            $.post("{{route('categories.change-status')}}",{
                id:id,
                active: newStatus
            }, function(data, status){
                console.log(456456);
                $.notify("Category status changed!", "success");
            })
        }
    </script>
@endsection


