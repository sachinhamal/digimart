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
                            <div class="col-md-6"><h4 class="title">Location Detail</h4></div>
                        </div>
                    </div>
                    <div class="card-content ">
                        <div class="container">
                            <div class="row">
                                <label for="Post Title" class="col-md-2">Location Name:</label>
                                <div class="col-md-4"> {{$location->title}} </div>
                            </div>
                            


                            <div class="text-center">
                                <a href="{{route('location.digi')}}">
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
@endsection
