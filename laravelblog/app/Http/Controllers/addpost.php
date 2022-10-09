<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\blog;
class addpost extends Controller
{
    //
    function show_blog(){
        $data= blog::all();
        return view('show',['blogs'=>$data]);
    }
    function create_blog(Request $req)
    {
        $blog= new blog;
        $blog->category=$req->category;
        $blog->tag=$req->tag;
        $blog->tag = Str::of($blog->tag)->after(',');
        $blog->post=$req->post;
        $blog->save();
        return redirect ('home');

    }
}
