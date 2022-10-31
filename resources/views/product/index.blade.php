@extends('layout.master')
@section('title', 'Products')
@section('content')
    <div class="off-canvas-wrapper" >
        <main class="off-canvas-content" data-off-canvas-content>
        @include('layout.header')
            <section class="box-content-x2">
                <div class="row">
                    <h3>Category Products List</h3>
                    <a href="{{route('products.create')}}" class="btn btn-success">
                            Add Product
                        </a>
                    <div class="table-scroll">
                        <table>
                            <thead>
                            <tr>
                                <th width="150">Name</th>
                                <th width="150">Products List</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                  <tr>
                                      <td>{{$category->name}}</td>
                                      <td>
                                          @if(count($category->products)>0)
                                      @foreach($category->products as $product)
                                      <ul class="products-ul">
                                          <li><span>Name :</span> {{$product->name}}</li>
                                          <li><span>Price :</span> {{$product->price}}</li>
                                          <li><span>Status :</span> {{$product->active == 1 ? 'Active' : 'Inactive'}}</li>
                                      </ul>
                                          @endforeach
                                          @else
                                          No Products
                                              @endif
                                      </td>
                                  </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$categories->links()}}
                    </div>
                </div>
            </section>
        @include('layout.footer')
        </main>
    </div>
@endsection


