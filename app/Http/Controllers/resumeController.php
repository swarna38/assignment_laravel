<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resumeController extends Controller
{
   public function resume(){
        return view('resume');
    }
}
