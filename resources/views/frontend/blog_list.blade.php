@extends('frontend.layouts.app')
 @section('content')

<section id="tw-case" class="tw-case">
      <div class="container">
         <div class="row text-center">
            <div class="col section-heading wow fadeInDown" data-wow-deuration="1s" data-wow-delay=".2s">
               <h2>
                  <small>Blogs</small>
                  
                  <span>Recent Blogs</span>
               </h2> 
               <span class="animate-border border-offwhite ml-auto mr-auto tw-mt-20"></span>
            </div> 
         </div> 
         <div class="row"> 
         	@foreach($blog as $scr)
            <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
               <div class="tw-case-study-box">
                  <div class="case-img study-bg-1">
                     <img src="{{URL::TO('images/blog/'.$scr->image)}}" alt="" class="img-fluid">
                  </div>
                  <!-- End case img -->
                  <div class="casestudy-content">
                     <a href="{{url('blogs/'.$scr->id)}}">
                        <h4>{{$scr->title}}</h4>
                     </a>
                     <p>{{$scr->created_at}}</p>
                  </div>
                  <!-- End case study content -->
               </div>
               <!-- End case study box -->
            </div> 
            @endforeach
         </div>
        
         <!-- End Row -->
      </div>
      <!-- Container End -->
   </section>
 @endsection