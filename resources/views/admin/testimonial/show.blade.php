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
                                <label for="Post Title" class="col-md-2">Title :</label>
                                <div class="col-md-4"> {{$testimonial->title}} </div>
                            </div>
                            <div class="row">
                                    <label for="product_name" class="col-md-2">Description</label>
                                    <div class="col-md-8 form-group">
                                        <textarea id="editor" name="description" disabled>{{$testimonial->description}}</textarea>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                    <label for="product_name" class="col-md-2">Video</label>
                                    <div class="col-md-8 form-group">
                                       <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                                        <video width="320" height="240" controls>
                                          <source src="{{URL::TO('testimonials/videos/').'/'.$testimonial->video}}" type="video/mp4">
                                          <source src="{{URL::TO('testimonials/videos/').'/'.$testimonial->video}}" type="video/ogg">
                                          Your browser does not support the video tag.
                                        </video> 
                                            
                                        </div>    
                                    </div>     
                                </div>


                            <div class="text-center">
                                <a href="{{route('testimonial.digi')}}">
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
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
@endsection
