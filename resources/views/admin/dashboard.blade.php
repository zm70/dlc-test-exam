@extends('admin.layout.master')
@section('title', 'Products')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Hi Dear User!</h5>
                                    <p class="mb-4">
                                        Welcome to DLC Test Exam Admin Panel.
                                    </p>
                                    <form method="post" action="{{route('logout')}}">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-outline-primary">Logout</button>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="/admin/assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                                </div>
                                <div class="dropdown">
                                    <button
                                        class="btn p-0"
                                        type="button"
                                        id="cardOpt4"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>

                                </div>
                            </div>
                            <span class="d-block mb-1">All Users</span>
                            <h3 class="card-title text-nowrap mb-2">{{$users}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="/admin/assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                                </div>
                                <div class="dropdown">
                                    <button
                                        class="btn p-0"
                                        type="button"
                                        id="cardOpt4"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>

                                </div>
                            </div>
                            <span class="d-block mb-1">All Products</span>
                            <h3 class="card-title text-nowrap mb-2">{{$products}}</h3>

                        </div>
                    </div>
                </div>
                <div class="col-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="/admin/assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                                </div>
                                <div class="dropdown">
                                    <button
                                        class="btn p-0"
                                        type="button"
                                        id="cardOpt4"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                </div>
                            </div>
                            <span class="d-block mb-1">Active Products</span>
                            <h3 class="card-title text-nowrap mb-2">{{$active_products}}</h3>

                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
@endsection


