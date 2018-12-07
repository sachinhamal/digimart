@extends('frontend.layouts.app')
 @section('content')
  <div id="banner-area" class="banner-area" >
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
              <img src="{{URL::TO('images/service/'.$service->image)}}" alt="" class="img-fluid">
            </div>
            <!-- Col end -->
         </div>
         <!-- Row end -->
      </div>
      <!-- Container end -->
   </div>
   <!-- Banner area end -->


   <section id="main-container" class="main-container">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="tw-about-bin">
                  <h2 class="column-title">{{$service->title}}</h2>
                  <span class="animate-border tw-mb-40 tw-mt-20"></span>
                  {!! $service->description!!}
               </div>
               <!-- About Bin End -->
            </div>
            <!-- Col End -->
           
            <!-- Col End -->
         </div>
         <!-- Row end -->
      </div>
      <!-- Container end -->
   </section>
   <!-- Main container end -->
      <!-- End Container -->
   <!-- </section> -->    <!-- End Tw Client -->
 @endsection