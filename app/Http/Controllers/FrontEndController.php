<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\About;
use App\Location;
use View;
use App\ScreenLocator;
use App\Blog;
use App\Service;
use App\Testimonial;
class FrontEndController extends Controller
{   
	public function __construct() {
		$location = Location::with('OrmScreen')->get();
		// $categories = Category::with('OrmPackage')->with('OrmSubcategory')->get();
		// $subpackage = sub_category::with('OrmSubPackage')->with('OrmCategory')->get();
		$data = array(
			'location' => $location,
			// 'categories' => $categories,
			// 'subpackage' => $subpackage,
		);
		view::share('data', $data);
	}
    public function index(){
   
    	$slider=Slider::where('status','1')->get();
    	$blog=Blog::all();
    	$service=Service::all();
    	$about=About::all();
    	$testimonial=Testimonial::all();
    	return view('frontend.index',compact('slider','blog','service','about','testimonial'));
    }

    public function about_us(){
    	$about=About::all();
    	return view('frontend.about',compact('about'));
    }
    public function why_digi(){
    	$about=About::all();
    	return view('frontend.why_digi',compact('about'));
    }

    public function how_works(){
    	$about=About::all();
    	return view('frontend.how_digi_work',compact('about'));
    }

    

    public function service_list(){
    	return view('frontend.service_list');
    }

    public function screen_location(){
    	return view('frontend.screen_locator');
    }

    public function screen_locator_list($id){
    	$screen=Location::where('id',$id)->with('OrmScreen')->get();
    	return view('frontend.screen_locator',compact('screen'));
    }

    public function screen_single($l_id,$id){
    	$screen=ScreenLocator::find($id);
    	return view('frontend.screen_locator_single',compact('screen'));
    }

    public function blog_single($id){
    	$blog=Blog::find($id);
    	return view('frontend.blog_single',compact('blog'));
    }

    public function blog_list(){
    	$blog=Blog::all();
    	return view('frontend.blog_list',compact('blog'));
    }

    public function service_single($id){
    	$service=Service::find($id);
    	return view('frontend.service_single',compact('service'));
    }

    public function testimonial($id){
    	$testimonial=Testimonial::find($id);
    	return view('frontend.testimonial',compact('testimonial'));
    }

    public function contact(){
    	return view('frontend.contact');
    }
}
