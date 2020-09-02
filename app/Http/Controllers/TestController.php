<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test0831;

class TestController extends Controller
{
    //
    public function index()
    {
      return Test0831::get();
      // $users=Test0831::get();
      // foreach($users as $user){
      //   echo $user->単位名称;
      // }
    }
}
