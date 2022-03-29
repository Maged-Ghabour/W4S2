<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class userController extends Controller
{



   public function create(){

    return view('create');
  }


   public function blog(Request $request){

  $data =   $this -> validate($request , [

        "title" => "required|alpha",
        "content" => "required|min:50",
        "image"=>"required|image"




    ]);



    // Move image to Uploads Folder

    $image = $request -> file("image");

    $ext = $image->getClientOriginalExtension();

    $name = uniqid() . ".$ext";
    $image->move(public_path("uploads/" ), $name);



    // Storing Data


        echo  $request->title."<br>";
        echo  $request->content."<br>";
        echo $request->image."<br>";


   }


   // Show in Blog Page





};
