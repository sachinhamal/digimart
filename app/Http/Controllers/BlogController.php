<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Blog;
class BlogController extends Controller
{
    public function index(){
    	$blog=Blog::all();
    	return view('admin.blog.list',compact('blog'));
    }

    public function create(){
    	return view('admin.blog.create');
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
                $location = public_path('/images/blog/');
                if (!is_dir($location)) {
                    mkdir($location, 0777, true);
                }
                $file->move($location,$image_name);
        }
        $input = Input::all();
        $input['image']=$image_name;
        $blog=Blog::create($input);
        $notification = array(
            'message' => 'Data Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('blogs.digi')->with($notification);
    }

    public function show($id){
    	$blog=Blog::findorfail($id);
    	return view('admin.blog.show',compact('blog'));
    }

    public function edit($id){
    	$blog=Blog::findorfail($id);
    	return view('admin.blog.edit',compact('blog'));
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
                $location = public_path('/images/blog/');
                if (!is_dir($location)) {
                    mkdir($location, 0777, true);
                }
                $file->move($location,$image_name);
        }
        $input = Input::all();
        if ($request->hasFile('image')) {
           $input['image']=$image_name;
        }
        $blog=Blog::findorfail($id);
        $blog->update($input);
        $notification = array(
            'message' => 'Data Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('blogs.digi')->with($notification);
    }
    public function destroy($id){
    	$blog=Blog::findorfail($id);
        $blog->delete();
        $notification = array(
            'message' => 'Data removed Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('blog.digi')->with($notification);
    }

    public function status(Request $request,$id){
    	Blog::where('id', $id)->update(array('status' => $request->status));
    	$notification = array(
            'message' => 'Blog status is changed',
            'alert-type' => 'success'
        );
        return redirect()->route('blogs.digi')->with($notification);

    }
}
