<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Slider;

class SliderController extends Controller
{
    public function index(){ 
    	$slider=Slider::all();
    	return view('admin.slider.list',compact('slider'));
    }

    public function create(){
    	return view('admin.slider.create');
    }
    public function store(Request $request){
    	$validator = \Validator::make($request->all(), [
            'title' => 'required',
            'image'=>'mimes:jpeg,jpg,png,gif|required',
            
            
        ],
            [
                'title.required' => 'You must enter the title!',
                // 'location_id.required' => 'You must enter the location!',
                'image.required' => 'You must enter the image!',
                
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }
        
        if ($request->hasFile('image')) {
                $file=$request->image;
                $image_name = time() . '.' . $file->getClientOriginalExtension();
                $location = public_path('/images/banner_images/');
                
                $file->move($location,$image_name);
        }
        $input = Input::all();
        $input['image']=$image_name;
        $slider=Slider::create($input);
        $notification = array(
            'message' => 'Data Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('slider.digi')->with($notification);
    }
    public function edit($id){
    	$slider=Slider::findorfail($id);
    	return view('admin.slider.edit',compact('slider'));
    }

    public function update(Request $request,$id){
    	$validator = \Validator::make($request->all(), [
            'title' => 'required',
            // 'image'=>'mimes:jpeg,jpg,png,gif|required',
            
            
        ],
            [
                'title.required' => 'You must enter the title!',
                // 'location_id.required' => 'You must enter the location!',
                // 'image.required' => 'You must enter the image!',
                
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }
        
        if ($request->hasFile('image')) {
                $file=$request->image;
                $image_name = time() . '.' . $file->getClientOriginalExtension();
                $location = public_path('/images/banner_images/');
                
                $file->move($location,$image_name);
        }
        $input = Input::all();
        if ($request->hasFile('image')) {
        $input['image']=$image_name;
        }
        $slider=Slider::findorfail($id);
        $slider->update($input);
        $notification = array(
            'message' => 'Data Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('slider.digi')->with($notification);
    }
    public function destroy($id){
    	$slider=Slider::findorfail($id);
    	$slider->delete();
    	$notification = array(
            'message' => 'Data deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('slider.digi')->with($notification);
    }
    public function status(Request $request,$id){
    	Slider::where('id', $id)->update(array('status' => $request->status));
    	$notification = array(
            'message' => 'Slider status is changed',
            'alert-type' => 'success'
        );
        return redirect()->route('slider.digi')->with($notification);

    }
}
