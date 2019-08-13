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
                                            <li class="breadcrumb-item active" aria-current="page">{{ $places->placename }}</li>
                                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                        <h5 class="card-header">{{ $places->placename }}</h5>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Place Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="New Place Name" value="{{ $places->placename }}">
                                </div>
                                <div class="form-group">
                                    <label for="divisionid">Division</label>
                                    <select class="custom-select" id="divisionid" name="divisionid" value="{{ $places->division_id }}">
                                        @foreach ($divisionview as $division)
                                            <option value="{{ $division->id }}">
                                                {{ $division->divisionname }} Division
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="city">City Name</label>
                                    <input type="text" class="form-control" name="city" id="city" placeholder="New City Name" value="{{ $places->city }}">
                                </div>
                                <div class="form-group">
                                    <label for="town">Township Name</label>
                                    <input type="text" class="form-control" name="town" id="town" placeholder="New Township Name" value="{{ $places->township }}">
                                </div>
                                <div class="form-group">
                                    <label for="imageupload">Picture</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" value="{{ $places->fileimage }}" name="fileimage" id="inputFile">
                                        <label class="custom-file-label" for="inputFile">Choose image to upload</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="placetypeid">Types</label>
                                    <select class="custom-select" id="placetypeid" name="placetypeid" value="{{ $places->placetype_id }}">
                                        @foreach ($placetype as $ptype)
                                            <option value="{{ $ptype->id }}">
                                                {{ $ptype->name }}
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="note">Note</label>
                                    <textarea name="note" id="note" class="form-control">{{ $places->note }}</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="plat" id="plat" placeholder="Latitude" value="{{ $places->lat }}">
                                    <input type="text" class="form-control" name="plong" id="plong" placeholder="Longtitude" value="{{ $places->long }}" style="margin-top:1%;">
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