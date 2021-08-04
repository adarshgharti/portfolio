<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Detail;
use App\Models\User;
use App\Models\Blog;

// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
// use Auth;


class PagesController extends Controller
{
    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    function displayAdminPanel(){
        return view('AdminPanel/admin');
    }

    function addNewBlog(Request $request){
        $data = new Blog();
        $data->title = $request->title;
        $data->body = $request->body;
        $data->save();
        return redirect()->route('list.blog');

    }


    function viewInsertDetails(){
        $count = Detail::count();
        $findRow = false;
        if($count>0){
            $findRow = true;
            $data = Detail::first();
            return view('AdminPanel/settings', compact('data', 'findRow'));
        }else{
            return view('AdminPanel/settings', compact('findRow'));
        }
    }

    function deleteBlog($id){
        // return $id;
        $del = Blog::where('id', $id)->delete();
        return redirect()->route('list.blog');
    }

    function updateBlog(Request $request){

        // return $request->id;
        $data= Blog::where('id', $request->id)->first();
        $data->title = $request->title;
        $data->body = $request->body;
        $data->save();
        return redirect()->route('list.blog');
    }

    function getEditBlog($id){
        // return $id;
        $data = Blog::where('id', $id)->first();
        return view('AdminPanel/editBlog', compact('data'));
    }

    function edit(Blog $blog){
    return view('blog.edit', compact('blog'));
    }


    function getContact(){
        $count = Detail::count();
        $findRow = false;
        if($count>0){
            $findRow = true;
            $data = Detail::first();
            return view('contact', compact('data', 'findRow'));
        }else{
            return view('contact', compact('findRow'));
        }
    }

    function getIndex(){
        return view('index');
    }

    function displayBlog(){
        // return view('blog');
        $data = Blog::all();
        // return $data;
        return view('blog',compact('data'));
    }

    
    function getBlogSettings(){
        // return view('blog');
        $data = Blog::all();
        // return $data;
        return view('AdminPanel/listBlog',compact('data'));
    }

    function getAbout(){
        #checking if the table has any occupied row
        $findRow = false;
        $count = Detail::count();
        if($count>0){
            $findRow = true;
            $data = Detail::first();
            return view('about', compact('data', 'findRow'));
        }else{
            return view('about', compact('findRow'));
        }
    }


    function insertDetails(Request $request){
        // return $data;
        $findRow = false;
        $count = Detail::count();
        
        if($data = Detail::where('id', $request->id)->first()){
            $data = Detail::find($request->id);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->education = $request->education;
            $data->description = $request->description;
            $data->save();
            return redirect()->route('new.settings');
        }else{
            $data = new Detail();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->education = $request->education;
            $data->description = $request->description;
            $data->save();
            return redirect()->route('new.settings');
        }

        // if(Detail::find($request->id)){
        //     #update query
        //     $detail = Detail::find($request->id);
        //     $detail->name = $request->name;
        //     $detail->address = $request->address;
        //     $detail->education = $request->education;
        //     $detail->description = $request->description;
        //     $detail->save();
        //     return redirect()->route('about');
        // }else{
        //     #insert query
        //     $detail = new Detail();
        //     $detail->name = $request->name;
        //     $detail->address = $request->address;
        //     $detail->education = $request->education;
        //     $detail->description = $request->description;
        //     $detail->save();
        //     return redirect()->route('about');
        // }

        
        #update main code
        // $detail = Detail::find($request->id);

        // $detail->name = $request->name;
        // $detail->email = $request->email;
        // $detail->address = $request->address;
        // $detail->education = $request->education;
        // $detail->description = $request->description;

        // $detail->save();
        // return ('index');
        // return redirect()->route('about');




        // $status = false;
        // $status = $detail->save();
        // return $status;
        // return view('about', ["status" => $status]);
        // return redirect()->route('about')->with($status);

    }

    function edit1(Request $request){    
        $status = false;
        $email = Auth::user()->email;
        $match = Detail::select('email')->where('email', $email)->get();       

        if(count($match)>0){
            $status = true;
        }else{
            $status = false;
        }
        if($data = Detail::where('email', $email)->first()){
            return view('settings',compact('data', 'status'));
        }else{
            $status = false;
            return view('settings', compact('status'));
        }

        // $mail = $request->user->id;
        
        // $mail = $request->Auth::user()->email;
        // return $mail;
        
        ####  ORIGINAL CODE ###
        // $data = Detail::first();
        // return $data;

    }

}