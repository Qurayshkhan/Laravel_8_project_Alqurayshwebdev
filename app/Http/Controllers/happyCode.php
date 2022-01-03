<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class happyCode extends Controller
{
    function HappyCode(){
        $webPage='Daraz';
        $user='Admin';
        $userType=$user=='Admin'? true : false;
        $students=['Hassan','Husnain','Adil','FaizRasool','Humyoun'];
        return view('admin.happyCode',['web'=>$webPage,'userType'=>$userType,'students'=>$students]);
    }
}
