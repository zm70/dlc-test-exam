@extends('admin.layout.master')
@section('title', 'Products')
@section('content')
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Products</h4>
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div>
                <h5 class="card-header list-title-panel">Products List</h5>
                <a type="button" class="btn btn-info add-btn-panel" href="{{route('products.create')}}">Add Product</a>
            </div>

            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Categories</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$product->name}}</strong></td>
                        <td>{{$product->price}}</td>
                        <td>
                            <select class="form-control" name="active" onchange="changeStatus(this,{{$product->id}})">
                                <option value="1" @if($product->active == 1) selected @endif>Active</option>
                                <option value="0" @if($product->active == 0) selected @endif>Inactive</option>
                            </select>
                        <td>
                            @foreach($product->categories as $cat)
                            <span class="badge bg-label-primary me-1">{{$cat->name}}</span>
                            @endforeach
                        </td>
                        <td>
                            <a class="btn btn-warning">Edit</a>
                            <a class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$products->links()}}
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
            $.post("{{route('products.change-status')}}",{
                id:id,
                active: newStatus
            }, function(data, status){
                console.log(456456);
                $.notify("Product status changed!", "success");
            })
        }
    </script>
@endsection


