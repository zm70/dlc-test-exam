@extends('layout.master')
@section('title', 'Home')
@section('content')
    <div class="off-canvas-wrapper" >
        <main class="off-canvas-content" data-off-canvas-content>
            @include('layout.header')
            <section class="box-content-x2">
                <div class="row">
                    <h3>Home Page</h3>
                </div>
            </section>
            @include('layout.footer')
        </main>
    </div>
@endsection


