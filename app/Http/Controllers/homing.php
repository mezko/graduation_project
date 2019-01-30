<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\firsttime;
use DB;

class homing extends Controller
{
  public function __construct(){
    //   $this->middleware('auth');
  }
  public function show(){
       return view('test');
  }
  public function event(){
     $select=DB::table('users')->get();
      $count=count($select);
        event(new firsttime($count));
        return view('npm',compact('count'));



  }


}
