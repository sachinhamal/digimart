@extends('frontend.layouts.app')
 @section('content')
  <div id="banner-area" class="banner-area" style="background-image:url(images/extra/banner/banner5.jpg)">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="banner-heading">
                  <h1 class="banner-title">Contact us</h1>
                  <ol class="breadcrumb">
                     <li>Home</li>
                     <li><a href="#">Contact us</a></li>
                  </ol>
               </div>
            </div> 
         </div> 
      </div> 
   </div>

   <section id="main-container" class="main-container">
      <div class="container">
         <div class="row">
            <div class="col text-center">
               <div class="section-heading">
                  <h2>
                     <small>Contact us</small>
                     Our Contact <span>Details</span>
                  </h2>
                  <span class="animate-border tw-mt-20 tw-mb-40 ml-auto mr-auto"></span>
               </div>
               <!-- End Heading -->
            </div>
            <!-- End Col -->
         </div>
         <!-- End Title Row -->
         <div class="row">
            <div class="col-md-4">
               <div class="tw-contact-box">
                  <div class="contact-heading">
                     <img src="images/icon/place1.png" alt="" class="img-fluid">
                     <h3>Sydney, AUSTRILIA</h3>
                  </div>
                  <!-- End Content Heading -->
                  <div class="contact-info-box-content">
                     <i class="fa fa-map-marker"></i>
                     <p>1010 Grand Avenue, Sydney</p>
                     <i class="fa fa-phone"></i>
                     <p>0402 686 211</p>
                     <i class="fa fa-envelope"></i>
                     <p>info@digimart.coms</p>
                  </div>
                  <!-- End content info box -->
               </div>
               <!-- End Contact Box -->
            </div>
            <!-- End Col -->
            <div class="col-md-8">
               	<div class="tw-contact-box"> 
                  	<div class="contact-info-box-content">
                      	<!-- <div class="row">
				            <div class="col">
				                <div class="section-heading text-center">
				                  	<h2>
					                    <small>leave a message</small>
					                    Give a <span>Message</span>
				                  	</h2>
				                  	<span class="animate-border border-ash ml-auto mr-auto tw-mt-20 tw-mb-40"></span>
				                </div>
				            </div> 
				        </div> --> 
				        <div class="contact-us-form">
				            <form id="contact-form" class="contact-form" action="" method="POST">
				               <div class="error-container"></div>
				               <div class="row">
				                  <div class="col-lg-6">
				                     <div class="form-group">
				                        <input class="form-control form-name" name="name" id="name" placeholder="Name" type="text" required="">
				                     </div>
				                  </div>
				                  <!-- Col end -->
				                  <div class="col-lg-6">
				                     <div class="form-group">
				                        <input class="form-control form-phone" name="phone" id="phone" placeholder="Phone" type="phone">
				                     </div>
				                  </div>
				                  <div class="col-lg-6">
				                     <div class="form-group">
				                        <input class="form-control form-email" name="email" id="email" placeholder="Email" type="email" required="">
				                     </div>
				                  </div>
				                  <div class="col-lg-6">
				                     <div class="form-group">
				                        <input class="form-control form-subject" placeholder="Subject" name="subject" id="subject" type="text">
				                     </div>
				                  </div>
				                  <div class="col-lg-12">
				                     <div class="form-group">
				                        <textarea class="form-control form-message required-field" id="message" placeholder="Comments" rows="1"></textarea>
				                     </div>
				                  </div>
				                  <!-- Col 12 end -->
				               </div>
				               <!-- Form row end -->
				               <div class="text-center">
				                  <button class="btn btn-primary btn-pad-minus" type="submit">Contact US</button>
				               </div>
				            </form>
				        </div>
                  	</div> 
               </div> 
            </div> 
         </div> 
         <div class="row">
            <div class="col">
               <div id="googleMap" style="width:100%;height:400px;"></div>
            </div>
         </div> 
      </div> 
   </section> 
   <script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
 @endsection