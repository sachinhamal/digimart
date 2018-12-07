@extends('admin.layouts.app')
@section('content')
    <style>
        .table th, .table td {
            padding: 5px 0.75rem 5px 0.75rem !important;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="custom-color">
                        <div class="row">
                            <div class="col-md-6"><h4 class="title">Cover Images</h4></div>
                            <div class="col-md-6 text-right">
                                <a class="btn btn-primary btn-sm" href="{{route('slider.create')}}">Add
                                    New
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-content table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                            <th>Title</th>
                            <th>Cover Image</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th id="action-th">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($slider))
                                @foreach($slider as $coverimage)
                                    <tr>
                                    <td>{{$coverimage->title}}</td>
                                    <td><img src="{{url('images/banner_images/'.$coverimage->image)}}" width="200px" alt="{{$coverimage->title}}"></td>
                                    <td>{{$coverimage->description}}</td>
                                    <td><form action="{{route('slider.status',$coverimage->id)}}" method="POST">
                                    	@csrf
                                    	<select name="status" onchange="this.form.submit()">
                                    		<?php if($coverimage->status ==1){
                                    			echo "<option selected>Active</option>
                                    			       <option value='0'>Inactive</option>";
                                    		
                                    		}else{
                                    			echo "<option selected>Inactive</option>
                                    			 <option value='1'>Active</option> ";
                                    		}
                                    		?>

                                    	</select>
                                    	</form>
                                    </td>
                                    <td>
                                        <a href="{{route('slider.edit',$coverimage->id)}}">
                                            <button type="button" class="btn btn-outline-warning">Edit</button>
                                        </a>
                                        <a type="button" onClick="javascript: return confirm('Please confirm deletion');" href="{{route('slider.delete',$coverimage->id)}}" data-id="{{ $coverimage->id }}"
                                           class="btn btn-danger btn-sm"><i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('admin.layouts.deleteModal')
@endsection
@section('scripts')
    <script>
        $('.btndel').click(function(e){
            e.preventDefault();
            var del_url = '{{ URL::to('admin/coverimage') }}/'+$(this).data('id');
            console.log(del_url);
            $('#firstform')[0].setAttribute('action', del_url);
            $('#deleteModal')
                .modal('show');
        });
    </script>
@endsection