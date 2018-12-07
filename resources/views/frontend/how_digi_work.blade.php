@extends('frontend.layouts.app')
 @section('content')
  <div id="banner-area" class="banner-area" style="background-image:url(images/extra/banner/banner5.jpg)">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="banner-heading">
                  <h1 class="banner-title">How Digi Works</h1>
                  <ol class="breadcrumb">
                     <li>Home</li>
                     <li><a href="#">How Digi Works</a></li>
                  </ol>
               </div>
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
            <div class="col-md-6">
               <div class="tw-about-bin">
                  <h2 class="column-title">WORK PROCESS</h2>
                  <span class="animate-border tw-mb-40 tw-mt-20"></span>
                  {!! $about['2']->description!!}
               </div>
               <!-- About Bin End -->
            </div>
            <!-- Col End -->
            <div class="col-md-6 align-self-md-center">
               <img src="{{URL::TO('images/extra/about/about_page_img1.png')}}" alt="" class="img-fluid">
            </div>
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