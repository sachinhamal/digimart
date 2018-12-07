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
                        <h4 class="title">Update Video Testimonial</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('testimonial.update',$testimonial->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="row">
                                    <label for="product_name" class="col-md-2">Testimonial title</label>
                                    <div class="col-md-4 form-group">
                                        <input type="text" name="title" value="{{$testimonial->title}}" class="form-control"
                                               data-validation="required"
                                               data-validation-error-msg="Please Enter Name"
                                               
                                        >
                                        <small class="form-text text-muted"><span class="label label-warning">* Required Field</span>
                                        </small>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <label for="product_name" class="col-md-2">Description</label>
                                    <div class="col-md-8 form-group">
                                        
                                        <div class="col-md-8 form-group" >
                                        <textarea cols="80" id="editor" rows="10" name="description">{!!$testimonial->description!!}</textarea>
                                        
                                    </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                    <label for="product_name" class="col-md-2">Video</label>
                                    <div class="col-md-4 form-group">
                                        <input type="file" name="video">    
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
    <script src="{{URL::TO('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script src="{{URL::TO('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}}"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>
  
    
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endsection
