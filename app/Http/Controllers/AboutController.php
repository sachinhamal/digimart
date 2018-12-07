<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\About;
class AboutController extends Controller
{
    public function index(){
    	$about=About::all();
    	return view('admin.about.list',compact('about'));
    }

    public function show($id){
    	$about=About::findorfail($id);
    	return view('admin.about.show',compact('about'));
    }
    public function edit($id){
    	$about=About::findorfail($id);
    	return view('admin.about.edit',compact('about'));
    }
    public function update(Request $request,$id){
        $validator = \Validator::make($request->all(), [
            'title' => 'required',
            'description'=>'required'
            
        ],
            [
                'title.required' => 'You must enter the title!',
                'description.required' => 'You must enter the description!',
                
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }
        $input = Input::all();
        $about=About::findorfail($id);
        $about->update($input);
        $notification = array(
            'message' => 'Data Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('about.digi')->with($notification);
    }

}
