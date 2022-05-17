<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sitepagecontroller extends Controller
{
   public function gotoindexpage(){
       
    return view("index");


   }
}
