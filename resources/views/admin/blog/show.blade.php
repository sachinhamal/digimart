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
                        <h4 class="title">Update Blog</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route('blogs.digi')}}" method="get" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="row">
                                    <label for="product_name" class="col-md-2">Blog Name</label>
                                    <div class="col-md-4 form-group">
                                        <input type="text" name="title" value="{{$blog->title}}" class="form-control" disabled>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <label for="product_name" class="col-md-2">Description</label>
                                    <div class="col-md-8 form-group">
                                        <textarea id="editor" name="description" disabled>{{$blog->description}}</textarea>
                                        
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <label for="product_name" class="col-md-2">Image</label>
                                    <div class="col-md-4 form-group">
                                        <img src="{{url('images/blog/'.$blog->image)}}" width="400px" alt="{{$blog->title}}">    
                                    </div>     
                                </div>
                                <div class="row">
                                    <label for="description" class="col-md-2 text-right">Status</label>
                                    <div class="col-md-4 form-group">
                                        
                                          @if($blog->status ==1)
                                           <option value="1">Active</option>
                                          @else
                                          <option value="0">Inactive</option>
                                          @endif
                                    
                                    </div>
                                </div>
                            <div class="text-center">
                                <button class="btn btn-success">Go Back</button>
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
    <script>
        $('#category').selectize({});
        $('#brand').selectize({
            maxItems: 1
        });
        $('#pro_store').selectize({
            maxItems: 1
        });
    </script>

    <script>
        $(function () {
            $('#feature').bootstrapToggle({
                on: 'Feature',
                off: 'Normal'
            });
        });
        $('#product_rating').change(function () {
            rate = $(this).val();
            if (rate > 5 || rate < 0) {
                $(this).val('');
            }
        });
        $('#product_rating').keyup(function () {
            rate = $(this).val();
            if (rate > 5 || rate < 0) {
                $(this).val('');
            }
        });
        $('#discount').keyup(function () {
            rate = $(this).val();
            if (rate > 100 || rate < 0) {
                $(this).val('');
            }
        });
        $('#tags').selectize({
            maxItems: 10,
            create: function (input) {
                return {
                    value: input,
                    text: input
                }
            }
        });

        function showResult() {
            var detail = $('#main-search').val();
            var livesearch = $('#livesearch');
            var product = '';
            document.getElementById("livesearch").innerHTML = product;
            $.ajax({
                url: '{{URL::TO('product-search-json')}}' + '/' + detail,
                type: 'GET',
                success: function (data) {
                    livesearch.css('display', 'block');
                    livesearch.css('border', '1px solid #A5ACB2');
                    $.each(data['products'], function (index, value) {
                        product = product + '<a href="{{URL::TO('admin/product/create')}}' + '?&id=' + value['id'] + '"><div>' + value['product_name'] + '</div></a>';
                        console.log(product);
                    });
                    document.getElementById("livesearch").innerHTML = product;
                }
            });
            if (detail == null) {
                livesearch.css('display', 'none');
            }

        }


    </script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endsection
