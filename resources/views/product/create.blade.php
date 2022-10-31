@extends('layout.master')
@section('title', 'Products')
@section('content')
    <div class="off-canvas-wrapper" >
        <main class="off-canvas-content" data-off-canvas-content>
            @include('layout.header')
            <section class="box-content-x2">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Add New Product</h3>
                    </div>
                    <div class="col-md-12">

                            <form method="post" action="{{route('products.store')}}">
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
                                <label>Price</label>
                                <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                                @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col-md-6">
                                <label>Categories</label>
                                <select class="js-example-basic-multiple" name="categories[]" multiple="multiple">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>

                                @error('categories')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>

                                <div class="col-md-6">
                                <label>Status</label>
                                <input type="radio"  name="active" value="1">Active
                                <input type="radio"  name="active" value="0">Inactive
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success">Add</button>
                                </div>

                                </div>
                            </form>


                    </div>
                    </div>

            </section>
            @include('layout.footer')
        </main>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endsection


