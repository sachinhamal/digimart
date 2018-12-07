<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Location;

class LocationController extends Controller
{
    public function index(){
    	$locations=Location::all();
    	return view('admin.location.list',compact('locations'));
    }

    public function create(){
    	return view('admin.location.create');
    }
    public function store(Request $request){
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
        $input = Input::all();
        $location=Location::create($input);
        $notification = array(
            'message' => 'Data Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('location.digi')->with($notification);
    }

    public function show($id){
    	$location=Location::findorfail($id);
    	return view('admin.location.show',compact('location'));
    }

    public function edit($id){
    	$location=Location::findorfail($id);
    	return view('admin.location.edit',compact('location'));
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
        $input = Input::all();
        $location=Location::findorfail($id);
        $location->update($input);
        $notification = array(
            'message' => 'Data Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('location.digi')->with($notification);
    }
    public function destroy($id){
    	$location=Location::findorfail($id);
        $location->delete();
        $notification = array(
            'message' => 'Data removed Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('location.digi')->with($notification);
    }
}
