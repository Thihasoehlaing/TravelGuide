@extends('Admin.default.master')

@section('css')
    
@endsection

@section('content')
    <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Travel Guide</h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link"></a>Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Places</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <!-- PlaceFormTable -->
                    <div class="card">
                        <h5 class="card-header">Divisions Table </h5>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            
                                            <th scope="col">Place Name</th>
                                            <th scope="col">Division Name</th>
                                            <th scope="col">City Name</th>
                                            <th scope="col">Township Name</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Note</th>
                                            <th scope="col">Latitude</th>
                                            <th scope="col">Longtitude</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($placeview as $place)
                                    {{-- @dd($place); --}}
                                            <tr>
                                                <th scope="row">{{ $place->id }}</th>
                                                <td>{{ $place->placename }}</td>
                                                <td>{{ $place->division->divisionname }} Division</td>
                                                <td>{{ $place->city }}</td>
                                                <td>{{ $place->township }}</td>
                                                <td>{{ $place->fileimage }}</td>
                                                <td>{{ $place->placetype->name }}</td>
                                                <td>{{ $place->note }}</td>
                                                <td>{{ $place->lat }}</td>
                                                <td>{{ $place->long }}</td>
                                                <td>
                                                    <a href="{{ url("/admin/places/edit/$place->id") }}" class="btn btn-default">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <a href="{{ url("/admin/places/delete/$place->id") }}">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </a>       
                                                </td>
                                            </tr>
                                    @endforeach
                                    </tbody>
                                        
                                </table>
                            </div>
                    </div>

                </div>
            </div>
    </div>
@endsection

@section('script')
    
@endsection