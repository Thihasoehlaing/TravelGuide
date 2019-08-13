@extends('Admin.default.master')

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
                                <h2 class="pageheader-title">Divisions</h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Division</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <!-- DivisionFormTable -->
                    <div class="card">
                        <h5 class="card-header">Divisions Table </h5>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Division Name</th>
                                            <th scope="col">City Name</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Zip Code</th>
                                            <th scope="col">Latitude</th>
                                            <th scope="col">Longtitude</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($divisionview as $division)
                                            <tr>
                                                <th scope="row">{{ $division->id }}</th>
                                                <td>{{ $division->divisionname }}</td>
                                                <td>{{ $division->city }}</td>
                                                <td>{{ $division->fileimage }}</td>
                                                <td>{{ $division->zip_code }}</td>
                                                <td>{{ $division->lat }}</td>
                                                <td>{{ $division->long }}</td>
                                                <td>
                                                    <a href="{{ url("/admin/divisions/edit/$division->id") }}" class="btn btn-default">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <a href="{{ url("/admin/divisions/delete/$division->id") }}">
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