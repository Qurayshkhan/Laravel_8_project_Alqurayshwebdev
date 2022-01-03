<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function myshow(){
        $name='Husnain';   
        $students=['Hassan','Husnain','Amir']; 
        return view('admin.contact',['name'=>$name,'students'=>$students]);
    }
}
