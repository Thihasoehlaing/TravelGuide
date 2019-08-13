@extends('Admin.default.master')

@section('css')
    <style>
        .divisionformsubmit{
            margin-top: 2%;
        }

    </style>
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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">{{ $division->divisionname }}</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">New Divisions</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->

                    <!-- NewDivisionForm -->
                    <div class="card">
                        <h5 class="card-header">New Division Form</h5>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Division Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="New Division Name" value="{{ $division->divisionname }}">
                                </div>
                                <div class="form-group">
                                    <label for="city">City Name</label>
                                    <input type="text" class="form-control" name="city" id="city" placeholder="New City Name" value="{{ $division->city }}">
                                </div>
                                <div class="form-group">
                                    <label for="imageupload">Picture</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" value="{{ $division->fileimage }}" name="fileimage" id="inputFile">
                                        <label class="custom-file-label" for="inputFile">Choose image to upload</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="zipcode">Zip Code or Postal Code</label>
                                    <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="Zip Code" value="{{ $division->zip_code }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="dlat" id="dlat" placeholder="Latitude" value="{{ $division->lat }}">
                                    <input type="text" class="form-control" name="dlong" id="dlong" placeholder="Longtitude" style="margin-top:1%;" value="{{ $division->long }}">
                                </div>
                                <div class="divisionformsubmit justify-end">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
    </div>
@endsection

@section('script')
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@endsection