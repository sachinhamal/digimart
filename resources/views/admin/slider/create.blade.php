@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="custom-color">
                        <h4 class="title">Add Cover Image</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-10 offset-2">
                                <div class="row">
                                    <label for="title" class="col-md-2 text-right">Title</label>
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="image" class="col-md-2 text-right">Banner Images</label>
                                    <div class="col-md-6 form-group">
                                        <input type="file" name="image" onchange="readURL(this);" accept="image/*"
                                               class="form-control" required>
                                         <img id="blah" src="#" alt="your image" />      
                                        <small class="form-text text-muted"><span class="label label-warning">* Required Field</span>
                                        </small>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="description" class="col-md-2 text-right">Description</label>
                                    <div class="col-md-6 form-group">
                                        <textarea type="text" name="description" class="form-control" rows="3">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="description" class="col-md-2 text-right">Status</label>
                                    <div class="col-md-6 form-group">
                                        <select name="status">
                                          <option value="1">Active</option>
                                          <option value="0">Inactive</option>
                                        </select>
                                        <small class="form-text text-muted"><span class="label label-warning">* Select active to make image viewable</span>
                                        </small>
                                    </div>
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
<script type="text/javascript">
 // alert();
     function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
 </script>
@endsection