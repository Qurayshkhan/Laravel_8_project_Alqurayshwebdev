<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // function show(){
    //     return "Hellow Controller";
    // }
    function show($name){
        return "Hellow Controller".$name;
    }
}
