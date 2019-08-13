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
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Places</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">New Place</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->

                    <!-- NewPlaceForm -->
                    <div class="card">
                        <h5 class="card-header">New Place Form</h5>
                        <div class="card-body">
                            <form action="{{ route('postplace') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Place Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="New Place Name">
                                </div>
                                <div class="form-group">
                                    <label for="divisionid">Division</label>
                                    <select class="custom-select" id="divisionid" name="divisionid">
                                        @foreach ($divisionview as $division)
                                            <option value="{{ $division->id }}">
                                                {{ $division->divisionname }} Division
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="city">City Name</label>
                                    <input type="text" class="form-control" name="city" id="city" placeholder="New City Name">
                                </div>
                                <div class="form-group">
                                    <label for="town">Township Name</label>
                                    <input type="text" class="form-control" name="town" id="town" placeholder="New Township Name">
                                </div>
                                <div class="form-group">
                                    <label for="imageupload">Picture</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="fileimage" id="inputFile">
                                        <label class="custom-file-label" for="inputFile">Choose image to upload</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="placetypeid">Types</label>
                                    <select class="custom-select" id="placetypeid" name="placetypeid">
                                        @foreach ($placetype as $ptype)
                                            <option value="{{ $ptype->id }}">
                                                {{ $ptype->name }}
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="note">Note</label>
                                    <textarea name="note" id="note" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="plat" id="plat" placeholder="Latitude">
                                    <input type="text" class="form-control" name="plong" id="plong" placeholder="Longtitude" style="margin-top:1%;">
                                </div>
                                <div class="divisionformsubmit justify-end">
                                    <button type="submit" class="btn btn-success">Add</button>
                                    <button type="reset" class="btn btn-danger">Cancel</button>
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