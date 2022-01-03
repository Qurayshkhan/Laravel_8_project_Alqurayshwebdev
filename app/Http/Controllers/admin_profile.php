<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin_profile extends Controller
{
    // function show_profile(){
    //     return view('admin.adminprofile');
    // }
    function show_profile($name){
        return view('admin.adminprofile',['name'=>$name]);
    }
    function show_profile2(){
        $name='Laravel';
        return view('admin.adminprofile',['name'=>$name]);
    }
}
