@extends('admin.layouts.app')
@section('content')


    <style>
        .table th, .table td {
            padding: 5px 0.75rem 5px 0.75rem !important;
        }

        .gallery {
            display: inline-block;
            margin-top: 20px;
        }

        img {
            padding: 20px;
        }

    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="custom-color">
                        <div class="row">
                            <div class="col-md-6"><h4 class="title">Screen Locator Detail</h4></div>
                        </div>
                    </div>
                    <div class="card-content ">
                        <div class="container">
                            <div class="row">
                                <label for="Post Title" class="col-md-2">Location Name:</label>
                                <div class="col-md-4"> {{$screen_locator[0]->title}} </div>
                            </div>
                            <div class="row">
                                    <label for="product_name" class="col-md-2">Description</label>
                                    <div class="col-md-8 form-group">
                                        <textarea id="editor" name="description" disabled>{{$screen_locator[0]->description}}</textarea>
                                        
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <label for="product_name" class="col-md-2">Choose Location</label>
                                    <div class="col-md-10 col-lg-10 form-group">
                                        <select name="location_id">
                                          <option value="{{$screen_locator[0]->location_id}}">{{$screen_locator[0]->orm_location['title']}}</option>
                                          
                                        </select>    
                                    </div>     
                                </div>
                                <div class="row">
                                    <label for="product_name" class="col-md-2">Image</label>
                                    <div class="col-md-4 form-group">
                                       <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                                            <a class="thumbnail fancybox" rel="ligthbox"
                                               href="{{URL::TO('images/screen_locator/').'/'.$screen_locator[0]->image}}">
                                                <img src="{{URL::TO('images/screen_locator/').'/'.$screen_locator[0]->image}}"
                                                     alt=""
                                                     height="250px"
                                                     width="250px">
                                            </a>
                                        </div>    
                                    </div>     
                                </div>


                            <div class="text-center">
                                <a href="{{route('screen-locator.digi')}}">
                                    <button class="btn btn-info">
                                        Back
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            //FANCYBOX
            //https://github.com/fancyapps/fancyBox
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
        });

    </script>
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
@endsection
