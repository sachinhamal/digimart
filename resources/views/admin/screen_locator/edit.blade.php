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
                        <h4 class="title">Update Screen Locator</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('screen-locator.edit',$screen_locator[0]->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="row">
                                    <label for="product_name" class="col-md-2">Screen Locator Name</label>
                                    <div class="col-md-4 form-group">
                                        <input type="text" name="title" value="{{$screen_locator[0]->title}}" class="form-control"
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
                                        <textarea id="editor" name="description">{{$screen_locator[0]->description}}</textarea>
                                        
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <label for="product_name" class="col-md-2">Choose Location</label>
                                    <div class="col-md-4 form-group">
                                        <select name="location_id">
                                          <option value="{{$screen_locator[0]->location_id}}">{{$screen_locator[0]->orm_location['title']}}</option>
                                          @foreach($locations as $location)
                                          <option value="{{$location->id}}">{{$location->title}}</option>
                                          @endforeach
                                        </select>    
                                    </div>     
                                </div>
                                <div class="row">
                                    <label for="product_name" class="col-md-2">Image</label>
                                    <div class="col-md-4 form-group">
                                        <input type="file" name="image">    
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
    <script>
        CKEDITOR.replace( 'editor', {
            // Define the toolbar groups as it is a more accessible solution.
            toolbarGroups: [
                {"name":"basicstyles","groups":["basicstyles"]},
                {"name":"links","groups":["links"]},
                {"name":"paragraph","groups":["list","blocks"]},
                {"name":"document","groups":["mode"]},
                {"name":"insert","groups":["insert"]},
                {"name":"styles","groups":["styles"]},
                {"name":"about","groups":["about"]}
            ],
            // Remove the redundant buttons from toolbar groups defined above.
            removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar'
        } );
    </script>
    <script src="{{URL::TO('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script src="{{URL::TO('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}}"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endsection
