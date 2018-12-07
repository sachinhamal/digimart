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
                            <div class="col-md-6"><h4 class="title">About Digimart list</h4>
                             <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">   
                            </div>
                           
                        </div>
                    </div>


                    <div class="card-content table-responsive">
                        <table class="table table-bordered table-striped" id="myTable">
                            <thead>
                            <!-- <th>SN</th> -->
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created Date</th>
                            <th id="action-th">Action</th>
                            </thead>
                            <tbody>
                            @if($about->count()>0)
                                @foreach($about as $product)
                                    <tr>
                                        
                                        <td>{{$product->title}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->created_at}}</td>
                                        <td class="td-actions text-left">

                                            <a href="{{route('about.show',$product->id)}}">
                                                <button type="button" class="btn btn-outline-info">Details</button>
                                            </a>
                                            <a href="{{route('about.edit',$product->id)}}">
                                                <button type="button" class="btn btn-outline-warning">Edit</button>
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