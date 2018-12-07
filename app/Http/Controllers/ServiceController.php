<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Service;
class ServiceController extends Controller
{
    public function index(){
    	$service=Service::all();
    	return view('admin.service.list',compact('service'));
    }
     public function create(){
    	return view('admin.service.create');
    }
    public function store(Request $request){
    	$validator = \Validator::make($request->all(), [
            'title' => 'required',
            'image' =>'required'
            
        ],
            [
                'title.required' => 'You must enter the title!',
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
                $location = public_path('/images/service/');
                if (!is_dir($location)) {
                    mkdir($location, 0777, true);
                }
                $file->move($location,$image_name);
        }
        $input = Input::all();
        $input['image']=$image_name;
        $blog=Service::create($input);
        $notification = array(
            'message' => 'Data Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('service.digi')->with($notification);
    }

    public function show($id){
    	$service=Service::findorfail($id);
    	return view('admin.service.show',compact('service'));
    }

    public function edit($id){
    	$service=Service::findorfail($id);
    	return view('admin.service.edit',compact('service'));
    }
    public function update(Request $request,$id){
    	$validator = \Validator::make($request->all(), [
            'title' => 'required',
            
        ],
            [
                'title.required' => 'You must enter the title!',
                
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
                $location = public_path('/images/service/');
                if (!is_dir($location)) {
                    mkdir($location, 0777, true);
                }
                $file->move($location,$image_name);
        }
        $input = Input::all();
        if ($request->hasFile('image')) {
           $input['image']=$image_name;
        }
        $service=Service::findorfail($id);
        $service->update($input);
        $notification = array(
            'message' => 'Data Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('service.digi')->with($notification);
    }
    public function destroy($id){
    	$service=Service::findorfail($id);
        $service->delete();
        $notification = array(
            'message' => 'Data removed Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('service.digi')->with($notification);
    }

    public function status(Request $request,$id){
    	Service::where('id', $id)->update(array('status' => $request->status));
    	$notification = array(
            'message' => 'Service status is changed',
            'alert-type' => 'success'
        );
        return redirect()->route('service.digi')->with($notification);

    }
}
