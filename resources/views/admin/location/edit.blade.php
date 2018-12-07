@extends('admin.layouts.app')
@section('content')
    <style>
        .toggle {
            border: 1px solid black;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="custom-color">
                        <h4 class="title">Add Location/City</h4>
                        <form class="search-form" action="" method="get">
                            <input type="text" placeholder="Search.." name="product_details" onkeyup="showResult()"
                                   id="main-search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                            <div id="livesearch" style="display: none;"></div>
                        </form>
                    </div>

                    <div class="card-body">
                        <form action="{{route('location.update',$location->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="row">
                                    <label for="product_name" class="col-md-2">Location Name</label>
                                    <div class="col-md-4 form-group">
                                        <input type="text" name="title" value="{{$location->title}}" class="form-control"
                                               data-validation="required"
                                               data-validation-error-msg="Please Enter Name"
                                               
                                        <small class="form-text text-muted"><span class="label label-warning">* Required Field</span>
                                        </small>
                                    </div>
                                  
                            </div>

                            <div class="text-center">
                                <button class="btn btn-success">Submit</button>
                                <button type="reset" class="btn btn-dark">Reset</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
@section('scripts')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endsection
