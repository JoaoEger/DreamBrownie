<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PadariaController extends Controller
{
    public function padarias(){
        return view("/agoraweb/padarias");
    }
}
