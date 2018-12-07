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
                            <div class="col-md-6"><h4 class="title">Service list</h4>
                             <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">   
                            </div>
                            <div class="col-md-6 text-right">
                                <a class="btn btn-primary btn-sm" href="{{route('service.create')}}">Add
                                    New
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="card-content table-responsive">
                        <table class="table table-bordered table-striped" id="myTable">
                            <thead>
                            <!-- <th>SN</th> -->
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th id="action-th">Action</th>
                            </thead>
                            <tbody>
                            @if($service->count()>0)
                                @foreach($service as $product)
                                    <tr>
                                        
                                        <td>{{$product->title}}</td>
                                        <td>{!!$product->description!!}</td>
                                        <td><img src="{{url('images/service/'.$product->image)}}" width="200px" alt="{{$product->title}}"></td>
                                         <td><form action="{{route('service.status',$product->id)}}" method="POST">
                                        @csrf
                                        <select name="status" onchange="this.form.submit()">
                                            <?php if($product->status ==1){
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
                                        <td class="td-actions text-left">

                                            <a href="{{route('service.show',$product->id)}}">
                                                <button type="button" class="btn btn-outline-info">Details</button>
                                            </a>
                                            <a href="{{route('service.edit',$product->id)}}">
                                                <button type="button" class="btn btn-outline-warning">Edit</button>
                                            </a>
                                            <a type="button" onClick="javascript: return confirm('Please confirm deletion');" href="{{route('service.delete',$product->id)}}" data-id="{{ $product->id }}"
                                               class="btn btn-danger btndel">Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5">No Data Found</td>
                                </tr>
                            @endif

                            </tbody>
                        </table>
                        <div class="pagination-links">paginate
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('admin.layouts.deleteModal')
@endsection
@section('scripts')
    <script>
    function myFunction() {
      // Declare variables 
      var input, filter, table, tr, td, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        } 
      }
    }
    </script>
@endsection