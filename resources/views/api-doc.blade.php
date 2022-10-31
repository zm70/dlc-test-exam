@extends('layout.master')
@section('title', 'API DOc')
@section('content')
    <div class="off-canvas-wrapper" >
        <main class="off-canvas-content" data-off-canvas-content>
            @include('layout.header')
            <section class="box-content-x2">
                <div class="row">
                    <h3>Api Doc</h3>
                    <table>
                        <thead>
                        <tr>
                            <th width="150">Title</th>
                            <th width="150">Info</th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>Categories</td>
                                <td>
                                    <ul>
                                        <li><span>Method:</span> GET</li>
                                        <li><span>Endpoint:</span> {URL}/api/categories</li>
                                    </ul>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </section>
            @include('layout.footer')
        </main>
    </div>
@endsection


