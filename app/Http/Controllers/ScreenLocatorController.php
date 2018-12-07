<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\ScreenLocator;
use App\Location;

class ScreenLocatorController extends Controller
{
    public function index(){
    	$ScreenLocator=ScreenLocator::with('orm_location')->get();

    	return view('admin.screen_locator.list',compact('ScreenLocator'));
    }

    public function create(){
    	$locations=Location::all();
    	return view('admin.screen_locator.create',compact('locations'));
    }

    public function store(Request $request){
    	$validator = \Validator::make($request->all(), [
            'title' => 'required',
            'image'=>'required',
            'location_id'=>'required'
            
        ],
            [
                'title.required' => 'You must enter the title!',
                'location_id.required' => 'You must enter the location!',
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
                $location = public_path('/images/screen_locator/');
                if (!is_dir($location)) {
                    mkdir($location, 0777, true);
                }
                $file->move($location,$image_name);
        }
        $input = Input::all();
        $input['image']=$image_name;
        $screen_locator=ScreenLocator::create($input);
        $notification = array(
            'message' => 'Data Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('screen-locator.digi')->with($notification);
    }
    public function show($id){
    	$screen_locator=ScreenLocator::where('id',$id)->with('orm_location')->get();
    	return view('admin.screen_locator.show',compact('screen_locator'));
    }
    public function edit($id){
    	$screen_locator=ScreenLocator::where('id',$id)->with('orm_location')->get();
    	$locations=Location::all();
    	return view('admin.screen_locator.edit',compact('screen_locator','locations'));
    }
    public function update(Request $request,$id){
      $validator = \Validator::make($request->all(), [
            'title' => 'required',
            // 'image'=>'required',
            'location_id'=>'required'
            
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
        
        if ($request->hasFile('image')) {
                $file=$request->image;
                $image_name = time() . '.' . $file->getClientOriginalExtension();
                $location = public_path('/images/screen_locator/');
                if (!is_dir($location)) {
                    mkdir($location, 0777, true);
                }
                $file->move($location,$image_name);
        }
        $input = Input::all();
        if ($request->hasFile('image')) {
        $input['image']=$image_name;
        }
        $screen_locator=ScreenLocator::findorfail($id);
        $screen_locator->update($input);
        $notification = array(
            'message' => 'Data Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('screen-locator.digi')->with($notification);	
    }
    public function destroy($id){
    	$location=ScreenLocator::findorfail($id);
        $location->delete();
        $notification = array(
            'message' => 'Data removed Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('screen-locator.digi')->with($notification);
    }
}
