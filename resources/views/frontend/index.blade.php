@extends('frontend.layouts.app')
 @section('content')
    <!-- Start hero slider/ Owl Carousel Slider -->
   <div class="tw-hero-slider owl-carousel">
    @foreach($slider as $slide)
      <div class="slider-1 slider-map-pattern">
         <!-- Slider arrow end -->
         <div class="slider-wrapper d-table">
            <div class="slider-inner d-table-cell">
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-md-12">
                        <img src="{{URL::TO('/images/banner_images/'.$slide->image)}}" alt="" class="slider-img img-fluid">
                     </div>
                     <!-- Col End -->
                  </div>
                  <!-- Row End -->
                  <div class="row justify-content-center text-center">
                     <div class="col-md-10">
                        <h1 class="tw-slider-subtitle">Search Engine Optimization</h1>
                     </div>
                     <!-- End Col -->
                  </div>
                  <!-- Row End -->
               </div>
               <!-- Container End -->
            </div>
            <!-- Slider Inner End -->
         </div>
         <!-- Slider Wrapper End -->
      </div>
  @endforeach
      <!-- Slider 1 end -->


      <!-- <div class="slider-2">
         <div class="slider-arrow">
            <img src="images/slider/pattern_arrow2.png" alt="sliderArrow1">
            <img src="images/slider/pattern_arrow1.png" alt="sliderArrow2">
            <img src="images/slider/pattern_arrow3.png" alt="sliderArrow3">
         </div>
         <div class="slider-wrapper d-table">
            <div class="slider-inner d-table-cell">
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-md-6">
                        <div class="slider-content">
                           <h1>We are Creating Custom
                              <span>SEO</span>
                           </h1>
                           <p>Start working with an company that provide everything you need to generate awareness, drive traffic,
                              connect with customers, and increase sales montes </p>
                           <a href="#" class="btn btn-dark">Free Analysis</a>
                        </div>
                     </div> 
                     <div class="col-md-6">
                        <img src="images/slider/slider2.png" alt="" class="img-fluid slider-img">
                     </div> 
                  </div> 
               </div> 
            </div> 
         </div> 
      </div> -->
      <!-- Slider 2 end -->


      <!-- <div class="slider-3">
         <div class="slider-arrow">
            <img src="images/slider/pattern_arrow2.png" alt="sliderArrow1">
            <img src="images/slider/pattern_arrow1.png" alt="sliderArrow2">
            <img src="images/slider/pattern_arrow3.png" alt="sliderArrow3">
         </div>
         <div class="slider-wrapper d-table">
            <div class="slider-inner d-table-cell">
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-md-6">
                        <img src="images/slider/slider3.png" alt="" class="img-fluid slider-img">
                     </div> 

                     <div class="col-md-6">
                        <div class="slider-content">
                           <h1>We serve best
                              <span>Local SEO</span> service </h1>
                           <p>Start workibng with an company that provide everything you need to generate awareness, drive traffic,
                              connect with customers, and increase sales montes</p>
                           <a href="#" class="btn btn-dark">Free Analysis</a>
                        </div> 
                     </div> 
                  </div> 
               </div> 
            </div> 
         </div> 
      </div>  -->
   </div>
   <!-- End Carousel -->


   <section id="tw-features" class="tw-features-area">
      <div class="container">
         <div class="row tw-mb-65">
            <div class="col-md-4 wow fadeInLeft" data-wow-duration="1s">
               <h2 class="column-title text-md-right text-sm-center">About<br/>DIGI MART!</h2>
            </div>
            <!-- Col End -->
            <div class="col-md-7 ml-md-auto wow fadeInRight" data-wow-duration="1s">
               <p class="features-text">
                 {!!$about['0']->description!!}
               </p>
            </div>
            <!-- Col End -->
         </div>
         <!-- End Row 1 -->
         <div class="row">
            <div class="owl-carousel-service owl-carousel">
               @foreach($service as $serv)
               <div class="col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                  <div class="features-box">
                     <!-- <div class="features-icon d-table">
                        <div class="features-icon-inner d-table-cell">
                           <img src="images/icon/feature1.png" alt="">
                        </div> 
                     </div> -->
                     <!-- End Features Icon -->
                     <h3>{{$serv->title}}</h3>
                     <p>{!! substr($serv['description'], 0, 100)!!}
                     </p>
                     <a href="{{url('/service/'.$serv->id)}}" class="tw-readmore">Read More
                        <i class="fa fa-angle-right"></i>
                     </a>
                  </div>
                  <!-- End Single Features -->
               </div>
               @endforeach
              
            </div>
            <!-- End col -->
         </div>
         <!-- End Row 2 -->
      </div>
      <!-- End Container -->
   </section>
   <!-- End Features section -->


 
   <!-- End Analysis Section -->

    <section id="work-process" class="work-process">
      <!-- <div class="work-bg-pattern d-none d-lg-inline-block">
         <img src="images/process/work_process.png" alt="" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.2s">
      </div> -->
      <!-- End Work BG Pattern -->
      <div class="container">
         <div class="row text-center">
            <div class="col section-heading wow fadeInDown" data-wow-duration="1s">
               <h2>
                  <small>ease steps</small>Our Working <span>Process</span></h2>
               <span class="animate-border ml-auto mr-auto tw-mt-20"></span>
            </div>
            <!-- End Col -->
         </div>
         <!-- End Row -->
         <div class="row"> 
            <div class="col-md-3">
               <div class="tw-work-process">
                  <!-- <div class="process-wrapper d-table wow zoomIn" data-wow-duration="1s" data-wow-delay=".2s">
                     <div class="process-inner d-table-cell">
                        <img src="images/icon/process1.png" alt="" class="img-fluid">
                     </div>
                  </div> -->
                  
                  <!-- End process wrapper -->
                  <p>01. Research Project</p>
                  <span>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non cum incidunt totam placeat consectetur accusantium suscipit laudantium, veritatis, rerum, delectus nostrum velit, consequuntur voluptatem pariatur beatae dolorem at error modi.
                  </span>
               </div>
               <!-- End Tw work process -->
            </div>
            <!-- End Col -->
            <div class="col-md-3">
               <div class="tw-work-process">
                  <!-- <div class="process-wrapper bg-orange d-table wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                     <div class="process-inner d-table-cell">
                        <img src="images/icon/process2.png" alt="" class="img-fluid">
                     </div>
                  </div> -->
                  <!-- End Process Wrapper -->
                  <p>02. Find Ideas</p>
                  <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit ex iusto omnis pariatur veniam perferendis, voluptas, mollitia aut suscipit nisi, facilis nulla voluptatem optio. Pariatur maxime esse repellat officia sapiente!</span>
               </div>
               <!-- End Word Process -->
            </div>
            <!-- End Col -->
            <div class="col-md-3">
               <div class="tw-work-process">
                  <!-- <div class="process-wrapper bg-blue d-table wow zoomIn" data-wow-duration="1s" data-wow-delay=".6s">
                     <div class="process-inner d-table-cell">
                        <img src="images/icon/process3.png" alt="" class="img-fluid">
                     </div>
                  </div> -->
                  <!-- End Process Wrapper -->
                  <p>03. Start Optimize</p>
                  <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita modi quas itaque tempore distinctio, quam quasi quis facere ratione consequatur laboriosam molestias odit sapiente odio mollitia dicta, sunt at harum.</span>
               </div>
               <!-- End Work Process -->
            </div>
            <!-- End Col -->
            <div class="col-md-3">
               <div class="tw-work-process">
                  <!-- <div class="process-wrapper bg-yellow d-table wow zoomIn" data-wow-duration="1s" data-wow-delay=".8s">
                     <div class="process-inner d-table-cell">
                        <img src="images/icon/process4.png" alt="" class="img-fluid">
                     </div>
                  </div> -->
                  <!-- End PRocess Wrapper -->
                  <p>04. Reach Target</p>
                  <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil beatae atque assumenda itaque placeat vitae, illum consequatur ipsam laudantium animi, nesciunt voluptatibus nobis dignissimos, rerum laboriosam. Expedita pariatur est, perferendis.</span>
               </div>
               <!-- End Work Process -->
            </div> 
            <!-- End Col -->
             
         </div>
         <!-- End Row -->
      </div>
      <!-- End Container -->
   </section>
   <!-- End Word Process -->
  
   <section id="tw-case" class="tw-case">
      <div class="container">
         <div class="row text-center">
            <div class="col section-heading wow fadeInDown" data-wow-deuration="1s" data-wow-delay=".2s">
               <h2>
                  <small>Success Stories</small>
                  Our
                  <span>Video Testimonials</span>
               </h2>
               <!-- End Section Title -->
               <span class="animate-border border-offwhite ml-auto mr-auto tw-mt-20"></span>
            </div>
            <!-- End Col -->
         </div>
         <!-- End Row -->
         <div class="row">
            <div class="owl-carousel-video owl-carousel">
              @foreach($testimonial as $testim) 
            <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
               <div class="tw-case-study-box">
                  <div class="case-img study-bg-1">
                     <!-- <img src="images/cases/case-study1.png" alt="" class="img-fluid"> -->
                     <video width="320" height="240" controls>
                     <source src="{{URL::TO('testimonials/videos/'.$testim->video)}}" type="video/mp4">
                     <!-- <source src="{{URL::TO('testimonials/videos/'.$testim->video)}}" type="video/ogg"> -->
                      </video>  
                  </div>
                  <!-- End case img -->
                  <div class="casestudy-content">
                     <a href="{{url('testimonial/'.$testim->id)}}">
                        <h4>{{$testim->title}}</h4>
                     </a>
                     <p>{{$testim->created_at}}</p>
                  </div>
                  <!-- End case study content -->
               </div>
               <!-- End case study box -->
            </div>
            @endforeach
            <!-- End Col -->
            
               <!-- End case study box -->
            </div>
            <!-- End col -->
            <!-- <div class="col-md-12 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s"><a href="#" class="btn btn-primary btn-lg tw-mt-80">view all</a></div> -->
         </div>
         <!-- End Row -->
      </div>
      <!-- Container End -->
   </section>
   <!-- TW case end -->
  
   <section id="tw-testimonial" class="tw-testimonial">
      <div class="container">
         <div class="row align-items-center justify-content-center">
            <div class="col-md-6 wow fadeInLeft" data-wow-duration="1s">
               <div class="tw-testimonial-content text-center">
                  <h2 class="section-title">Love From Clients</h2>
                  <span class="animate-border border-green tw-mt-20 tw-mb-40 ml-auto mr-auto"></span>
               </div>
               <div class="tw-testimonial-carousel owl-carousel">
                  <div class="tw-testimonial-wrapper">
                     <div class="testimonial-bg testimonial-bg-orange">
                        <div class="testimonial-icon">
                           <img src="images/icon-image/testimonial1.png" alt="" class="img-fluid">
                        </div>
                     </div>
                     <!-- End Testimonial bg -->
                     <div class="testimonial-text">
                        <p>Start working with an company that can do provide every thing at you need to generate awareness,
                           drive traffic, connect with</p>
                        <div class="testimonial-meta">
                           <h4>
                              Jason Stattham
                              <small>CEO Microhost</small>
                           </h4>
                           <i class="icon icon-quote2"></i>
                        </div>
                        <!-- End Testimonial Meta -->
                     </div>
                     <!-- End testimonial text -->
                  </div>
                  <!-- End Tw testimonial wrapper -->
                  <div class="tw-testimonial-wrapper">
                     <div class="testimonial-bg testimonial-bg-orange">
                        <div class="testimonial-icon">
                           <img src="images/icon-image/testimonial1.png" alt="" class="img-fluid">
                        </div>
                     </div>
                     <!-- End Testimonial bg -->
                     <div class="testimonial-text">
                        <p>Start working with an company that can do provide every thing at you need to generate awareness,
                           drive traffic, connect with</p>
                        <div class="testimonial-meta">
                           <h4>
                              Jason Stattham
                              <small>CEO Microhost</small>
                           </h4>
                           <i class="icon icon-quote2"></i>
                        </div>
                        <!-- End Testimonial meta -->
                     </div>
                     <!-- End Testimonial Text -->
                  </div>
                  <!-- End Tw testimonial wrapper -->
                  <div class="tw-testimonial-wrapper">
                     <div class="testimonial-bg testimonial-bg-orange">
                        <div class="testimonial-icon">
                           <img src="images/icon-image/testimonial1.png" alt="" class="img-fluid">
                        </div>
                     </div>
                     <!-- end testimonial bg -->
                     <div class="testimonial-text">
                        <p>Start working with an company that can do provide every thing at you need to generate awareness,
                           drive traffic, connect with</p>
                        <div class="testimonial-meta">
                           <h4>
                              Jason Stattham
                              <small>CEO Microhost</small>
                           </h4>
                           <i class="icon icon-quote2"></i>
                        </div>
                        <!-- End testimonial meta -->
                     </div>
                     <!-- End testimonial text -->
                  </div>
                  <!-- End tw testimonial wrapper -->
               </div>
               <!-- End Tw testimonial carousel -->
            </div>
            <!-- End Col -->
         </div>
         <!-- End Row -->
      </div>
      <!-- End Container -->
   </section>
   <!-- End TW testimonial -->
    <section id="tw-facts" class="tw-facts">
      <div class="facts-bg-pattern d-none d-lg-block">
         <img class="wow fadeInLeft" src="{{URL::TO('images/extra/funfacts/arrow_left.png')}}" alt="arrwo_left">
         <img class="wow fadeInRight" src="{{URL::TO('images/extra/funfacts/arrow_right.png')}}" alt="arrow_right">
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-3 text-center">
               <div class="tw-facts-box">
                 <!--  <div class="facts-img wow zoomIn" data-wow-duration="1s">
                     <img src="images/icon/fact1.png" alt="" class="img-fluid">
                  </div> -->
                  <!-- End Fatcs image -->
                  <div class="facts-content wow fadeInUp" data-wow-duration="1s">
                     <h4 class="facts-title">Active clients</h4>
                     <span class="counter">200</span>
                     <sup>+</sup>
                  </div>
                  <!-- Facts Content End -->
               </div>
               <!-- Facts Box End -->
            </div>
            <!-- Col End -->
            <div class="col-md-3 text-center">
               <div class="tw-facts-box">
                  <!-- <div class="facts-img wow zoomIn">
                     <img src="images/icon/fact2.png" alt="" class="img-fluid">
                  </div> -->
                  <!-- End Facts Image -->
                  <div class="facts-content wow slideInUp">
                     <h4 class="facts-title">Projects Done</h4>
                     <span class="counter">570</span>
                     <sup>+</sup>
                  </div>
                  <!-- End Facts Content -->
               </div>
               <!-- End Facts Box -->
            </div>
            <!-- Col End -->
            <div class="col-md-3 text-center">
               <div class="tw-facts-box">
                  <!-- <div class="facts-img wow zoomIn">
                     <img src="images/icon/fact3.png" alt="" class="img-fluid">
                  </div> -->
                  <!-- End Facts Image -->
                  <div class="facts-content wow slideInUp">
                     <h4 class="facts-title">Success Rate</h4>
                     <span class="counter">98</span>
                     <sup>%</sup>
                  </div>
                  <!-- End Facts Content -->
               </div>
               <!-- End Facts Box -->
            </div>
            <!-- Col End -->
            <div class="col-md-3 text-center">
               <div class="tw-facts-box">
                  <!-- <div class="facts-img wow zoomIn">
                     <img src="images/icon/fact4.png" alt="" class="img-fluid">
                  </div> -->
                  <!-- End Facts Image -->
                  <div class="facts-content wow slideInUp">
                     <h4 class="facts-title">Awards</h4>
                     <span class="counter">50</span>
                     <sup>+</sup>
                  </div>
                  <!-- End Facts Content -->
               </div>
               <!-- End Facts Box -->
            </div>
            <!-- Col End -->
         </div>
         <!-- Row End -->
      </div>
      <!-- Container End -->
   </section>
   <!-- Facts End -->

   <section id="tw-pricing" class="tw-pricing">
      <div class="container">
         <div class="row text-center">
            <div class="col section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
               <h2>
                  <small>Pricing Table</small>
                  Our <span>Pricing</span>
               </h2>
               <span class="animate-border ml-auto mr-auto tw-mt-20"></span>
            </div>
            <!-- End Col -->
         </div>
         <!-- End Section Heading Row -->
         <div class="row">
            <div class="col-md-12">
               <div class="pricing-tab">
                  <ul class="nav">
                     <li class="nav-item wow fadeInLeft" data-wow-duration="1s">
                        <a data-toggle="tab" href="#monthly" class="active">Monthly</a>
                     </li>
                     <li class="nav-item wow fadeInRight" data-wow-duration="1s">
                        <a data-toggle="tab" href="#yearly">Yearly</a>
                     </li>
                  </ul>
                  <!-- Nav Tabs ends -->
                  <div class="tab-content tw-tab-content">
                     <div class="tab-pane show active" id="monthly">
                        <div class="row animated fadeIn">
                           <div class="col-md-4 animated fadeIn">
                              <div class="tw-pricing-box border-left-radius">
                                 <div class="price-icon-bg">
                                    <div class="price-icon">
                                       <img src="images/pricing/pricing_icon1.png" alt="" class="img-fluid">
                                    </div>
                                 </div>
                                 <!-- End Pricing icon bg -->
                                 <div class="pricing-feaures">
                                    <h3>Entrepreneur</h3>
                                    <ul>
                                       <li>25 Analytics Compaign</li>
                                       <li>1,300 Keywords</li>
                                       <li>25 social media reviews</li>
                                       <li>1 Free Optimization</li>
                                    </ul>
                                 </div>
                                 <!-- Pricing Features End -->
                                 <div class="pricing-price">
                                    <sup>$</sup>
                                    <strong>9</strong>
                                    <small>Month</small>
                                 </div>
                                 <!-- Pricing End -->
                                 <a href="#" class="btn btn-dark">buy now</a>

                              </div>
                              <!--  pricing box ends -->
                           </div>
                           <!-- COl end -->
                           <div class="col-md-4 animated fadeIn">
                              <div class="tw-pricing-box pricing-featured">
                                 <div class="price-icon-bg">
                                    <div class="price-icon">
                                       <img src="images/pricing/pricing_icon2.png" alt="" class="img-fluid">
                                    </div>
                                 </div>
                                 <!-- End Pricing icon bg -->
                                 <div class="pricing-feaures">
                                    <h3>Growing Business</h3>
                                    <ul>
                                       <li>25 Analytics Compaign</li>
                                       <li>1,300 Keywords</li>
                                       <li>25 social media reviews</li>
                                       <li>1 Free Optimization</li>
                                       <li>24/7 support</li>
                                    </ul>
                                 </div>
                                 <!-- Pricing Features End -->
                                 <div class="pricing-price">
                                    <sup>$</sup>
                                    <strong>29</strong>
                                    <small>Month</small>
                                 </div>
                                 <!-- Pricing End -->
                                 <a href="#" class="btn btn-dark">buy now</a>

                              </div>
                              <!--  pricing box ends -->
                           </div>
                           <!-- COl end -->
                           <div class="col-md-4 animated fadeIn">
                              <div class="tw-pricing-box border-right-radius">
                                 <div class="price-icon-bg">
                                    <div class="price-icon">
                                       <img src="images/pricing/pricing_icon3.png" alt="" class="img-fluid">
                                    </div>
                                 </div>
                                 <!-- End Pricing icon bg -->
                                 <div class="pricing-feaures">
                                    <h3>Pro Business</h3>
                                    <ul>
                                       <li>25 Analytics Compaign</li>
                                       <li>1,300 Keywords</li>
                                       <li>25 social media reviews</li>
                                       <li>1 Free Optimization</li>
                                    </ul>
                                 </div>
                                 <!-- Pricing Features End -->
                                 <div class="pricing-price">
                                    <sup>$</sup>
                                    <strong>49</strong>
                                    <small>Month</small>
                                 </div>
                                 <!-- Pricing End -->
                                 <a href="#" class="btn btn-dark">buy now</a>

                              </div>
                              <!--  pricing box ends -->
                           </div>
                           <!-- COl end -->
                        </div>
                        <!-- Tab pane end -->
                     </div>
                     <!-- Tab Content End -->
                     <div class="tab-pane show fade" id="yearly">
                        <div class="row">
                           <div class="col-md-4 animated fadeIn">
                              <div class="tw-pricing-box">
                                 <div class="price-icon-bg">
                                    <div class="price-icon">
                                       <img src="images/pricing/pricing_icon1.png" alt="" class="img-fluid">
                                    </div>
                                 </div>
                                 <!-- End Pricing icon bg -->
                                 <div class="pricing-feaures">
                                    <h3>Entrepreneur</h3>
                                    <ul>
                                       <li>25 Analytics Compaign</li>
                                       <li>1,300 Keywords</li>
                                       <li>25 social media reviews</li>
                                       <li>1 Free Optimization</li>
                                    </ul>
                                 </div>
                                 <!-- Pricing Features End -->
                                 <div class="pricing-price">
                                    <sup>$</sup>
                                    <strong>7</strong>
                                    <small>Yearly</small>
                                 </div>
                                 <!-- Pricing End -->
                                 <a href="#" class="btn btn-dark">buy now</a>

                              </div>
                              <!--  pricing box ends -->
                           </div>
                           <!-- COl end -->
                           <div class="col-md-4 animated fadeIn">
                              <div class="tw-pricing-box pricing-featured">
                                 <div class="price-icon-bg">
                                    <div class="price-icon">
                                       <img src="images/pricing/pricing_icon2.png" alt="" class="img-fluid">
                                    </div>
                                 </div>
                                 <!-- End Pricing icon bg -->
                                 <div class="pricing-feaures">
                                    <h3>Growing Business</h3>
                                    <ul>
                                       <li>25 Analytics Compaign</li>
                                       <li>1,300 Keywords</li>
                                       <li>25 social media reviews</li>
                                       <li>1 Free Optimization</li>
                                       <li>24/7 support</li>
                                    </ul>
                                 </div>
                                 <!-- Pricing Features End -->
                                 <div class="pricing-price">
                                    <sup>$</sup>
                                    <strong>28</strong>
                                    <small>Yearly</small>
                                 </div>
                                 <!-- Pricing End -->
                                 <a href="#" class="btn btn-dark">buy now</a>

                              </div>
                              <!--  pricing box ends -->
                           </div>
                           <!-- COl end -->
                           <div class="col-md-4 animated fadeIn">
                              <div class="tw-pricing-box">
                                 <div class="price-icon-bg">
                                    <div class="price-icon">
                                       <img src="images/pricing/pricing_icon3.png" alt="" class="img-fluid">
                                    </div>
                                 </div>
                                 <!-- End Pricing icon bg -->
                                 <div class="pricing-feaures">
                                    <h3>Pro Business</h3>
                                    <ul>
                                       <li>25 Analytics Compaign</li>
                                       <li>1,300 Keywords</li>
                                       <li>25 social media reviews</li>
                                       <li>1 Free Optimization</li>
                                    </ul>
                                 </div>
                                 <!-- Pricing Features End -->
                                 <div class="pricing-price">
                                    <sup>$</sup>
                                    <strong>47</strong>
                                    <small>Yearly</small>
                                 </div>
                                 <!-- Pricing End -->
                                 <a href="#" class="btn btn-dark">buy now</a>

                              </div>
                              <!--  pricing box ends -->
                           </div>
                           <!-- COl end -->
                        </div>
                        <!-- Tab pane end -->
                     </div>
                     <!-- Tab Content End -->
                  </div>
                  <!-- Row End -->
               </div>
               <!-- Pricing tab end -->
            </div>
            <!-- Content Col end -->
         </div>
         <!-- Content Row End -->
      </div>
      <!-- Container End -->

   </section>
   <!-- End Pricing -->


   <section id="tw-blog" class="tw-blog">
      <div class="container">
         <div class="row text-center">
            <div class="col section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
               <h2>
                  <small>our blog</small>
                  Latest <span>Blog</span>
               </h2>
               <span class="animate-border border-offwhite ml-auto mr-auto tw-mt-20"></span>
            </div>
            <!-- Col end -->
         </div>
         <!-- Row End -->
         <div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
            @foreach($blog as $blo)
            <div class="col-lg-4 col-md-12">
               <div class="tw-latest-post">
                  <div class="latest-post-media text-center">
                     <img src="{{URL::TO('images/blog/'.$blo->image)}}" alt="blog_image_one" class="img-fluid">
                  </div>
                  <!-- End Latest Post Media -->
                  <div class="post-body">
                     <div class="post-item-date">
                        <div class="post-date">
                           <span class="date">{{$blo->created_at}}</span>
                           <!-- <span class="month">May</span> -->
                        </div>
                     </div>
                     <!-- End Post Item Date -->
                     <div class="post-info">
                        <div class="post-meta">
                           <span class="post-author">
                              Posted by <a href="#">Admin</a>
                           </span>
                        </div>
                        <!-- End Post Meta -->
                        <h3 class="post-title"><a href="{{url('blogs/'.$blo->id)}}">{{$blo->title}}</a></h3>
                        <div class="entry-content">
                           <p>
                              {!!$blo->description!!}
                           </p>
                        </div>
                        <!-- End Entry Content -->
                     </div>
                     <!-- End Post info -->
                  </div>
                  <!-- End Post Body -->
               </div>
               <!-- End Tw Latest Post -->
            </div>
            @endforeach
            <!-- End Col -->
            
            <!-- End Col -->
            <div class="col-md-12 text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="1s"><a href="{{url('/all-blogs')}}" class="btn btn-primary btn-lg tw-mt-80">view all</a></div>
         </div>
         <!-- End Row -->
      </div>
      <!-- Container End -->
   </section>
   <!-- End tw blog -->

   <section id="tw-client" class="tw-client">
      <div class="container">
         <div class="row  wow fadeInUp">
            <div class="col-md-12">
               <div class="clients-carousel owl-carousel">
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="{{URL::TO('images/extra/clients/client1.png')}}" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="{{URL::TO('images/extra/clients/client3.png')}}" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="{{URL::TO('images/extra/clients/client3.png')}}" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="{{URL::TO('images/extra/clients/client4.png')}}" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="{{URL::TO('images/extra/clients/client2.png')}}" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="{{URL::TO('images/extra/clients/client2.png')}}" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="{{URL::TO('images/extra/clients/client2.png')}}" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="{{URL::TO('images/extra/clients/client2.png')}}" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div> 
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="{{URL::TO('images/extra/clients/client2.png')}}" alt="">
                     </div> 
                  </div> 
               </div> 
            </div> 
         </div> 
      </div> 
   </section> 
   <!-- video footer -->
    <section id="video-banner" class="banner-padding back-size">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <!--<h2>Take a Video Tour</h2> -->
                       <iframe width="100%" height="350" src="{{URL::TO('frontend/footer_video/digimarthub_theme.mp4')}}" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </section>

 @endsection