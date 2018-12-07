@extends('frontend.layouts.app')
 @section('content')
  <div id="banner-area" class="banner-area" style="background-image:url(images/extra/banner/banner5.jpg)">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="banner-heading">
                  <h1 class="banner-title">About us</h1>
                  <ol class="breadcrumb">
                     <li>Home</li>
                     <li><a href="#">About us</a></li>
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
                  <h2 class="column-title">About DIGI MART HUB</h2>
                  <span class="animate-border tw-mb-40 tw-mt-20"></span>
                  {!! $about['0']->description!!}
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


   
   <!-- Mission End -->


   <section id="tw-timeline" class="tw-timeline">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="timeline-wrapper">
                  <div class="row">
                     <div class="col-md-6 timeline-item left-part">
                        <div class="timeline-badge"></div>
                        <div class="timeline-panel">
                           <p class="details">Our promising journey started on 08 February 2010 by Leonardo Decaprio, the CEO and Founder of
                              the SeoBin
                           </p>
                        </div>
                     </div>
                     <div class="col-md-6 timeline-item ">
                        <div class="timeline-date left-part">
                           <p class="title">2010</p>
                           <p class="tagline">we are featured</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 timeline-item">
                        <div class="timeline-date active">
                           <p class="title">2010</p>
                           <p class="tagline">we are featured</p>
                        </div>
                     </div>
                     <div class="col-md-6 timeline-item">
                        <div class="timeline-badge active"></div>
                        <div class="timeline-panel">
                           <p class="details">Our promising journey started on 08 February 2010 by Leonardo Decaprio, the CEO and Founder of
                              the SeoBin
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 timeline-item left-part">
                        <div class="timeline-badge"></div>
                        <div class="timeline-panel">
                           <p class="details">Our promising journey started on 08 February 2010 by Leonardo Decaprio, the CEO and Founder of
                              the SeoBin
                           </p>
                        </div>
                     </div>
                     <div class="col-md-6 timeline-item ">
                        <div class="timeline-date left-part">
                           <p class="title">2010</p>
                           <p class="tagline">we are featured</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 timeline-item">
                        <div class="timeline-date">
                           <p class="title">2010</p>
                           <p class="tagline">we are featured</p>
                        </div>
                     </div>
                     <div class="col-md-6 timeline-item">
                        <div class="timeline-badge"></div>
                        <div class="timeline-panel">
                           <p class="details">Our promising journey started on 08 February 2010 by Leonardo Decaprio, the CEO and Founder of
                              the SeoBin
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>  
   <!-- End TW testimonial -->

   <!-- <section id="tw-client" class="tw-client">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="clients-carousel owl-carousel">
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="images/clients/client1.png" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="images/clients/client2.png" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="images/clients/client3.png" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="images/clients/client4.png" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="images/clients/client2.png" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="images/clients/client2.png" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="images/clients/client2.png" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="images/clients/client2.png" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="images/clients/client2.png" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
               </div>
               <!-- End Carousel -->
            </div>
            <!-- End Col -->
         </div>
         <!-- End Row -->
      </div>
      <!-- End Container -->
   <!-- </section> -->    <!-- End Tw Client -->
 @endsection