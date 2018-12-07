<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Testimonial;
class TestimonialController extends Controller
{
    public function index(){
    	$testimonials=Testimonial::all();

    	return view('admin.testimonial.list',compact('testimonials'));
    }

    public function create(){
    	
    	return view('admin.testimonial.create');
    }

    public function store(Request $request){
    	$validator = \Validator::make($request->all(), [
            'title' => 'required',
            'video'=>'mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4|required',
            
            
        ],
            [
                'title.required' => 'You must enter the title!',
                // 'location_id.required' => 'You must enter the location!',
                'video.required' => 'You must enter the video!',
                
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }
        
        if ($request->hasFile('video')) {
                $file=$request->video;
                $video_name = time() . '.' . $file->getClientOriginalExtension();
                $location = public_path('/testimonials/videos/');
                
                $file->move($location,$video_name);
        }
        $input = Input::all();
        $input['video']=$video_name;
        $testimonial=Testimonial::create($input);
        $notification = array(
            'message' => 'Data Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('testimonial.digi')->with($notification);
    }
    public function show($id){
    	$testimonial=Testimonial::findorfail($id);
    	return view('admin.testimonial.show',compact('testimonial'));
    }
    public function edit($id){
    	$testimonial=Testimonial::findorfail($id);
    	return view('admin.testimonial.edit',compact('testimonial'));
    }
    public function update(Request $request,$id){
      $validator = \Validator::make($request->all(), [
            'title' => 'required',
            // 'image'=>'required',
            // 'location_id'=>'required'
            
        ],
            [
                'title.required' => 'You must enter the title!',
                'location_id.required' => 'You must enter the location!',
                // 'image.required' => 'You must enter the image!',
                
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }
        
        if ($request->hasFile('video')) {
                $file=$request->video;
                $video_name = time() . '.' . $file->getClientOriginalExtension();
                $location = public_path('/testimonials/videos/');
                
                $file->move($location,$video_name);
        }
        $input = Input::all();
        if ($request->hasFile('video')) {
        $input['video']=$video_name;
        }
        $testimonial=Testimonial::findorfail($id);
        $testimonial->update($input);
        $notification = array(
            'message' => 'Data Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('testimonial.digi')->with($notification);	
    }
    public function destroy($id){
    	$testimonial=Testimonial::findorfail($id);
        $testimonial->delete();
        $notification = array(
            'message' => 'Data removed Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('testimonial.digi')->with($notification);
    }
}
