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
                            <div class="col-md-6"><h4 class="title">About Detail</h4></div>
                        </div>
                    </div>
                    <div class="card-content ">
                        <div class="container">
                            <div class="row">
                                <label for="Post Title" class="col-md-2">Title:</label>
                                <div class="col-md-4"> {{$about->title}} </div>
                            </div>
                            <div class="row">
                                    <label for="product_name" class="col-md-2">Description</label>
                                    <div class="col-md-4 form-group">
                                        <textarea id='editor' name="description" disabled>{{$about->description}}</textarea>
                                        
                                    </div>
                                    
                                </div>
                                
                            <div class="text-center">
                                <a href="{{route('about.digi')}}">
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
