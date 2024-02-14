<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuemSomosConntroller extends Controller
{
    public function quemSomos(){
        return view("/agoraweb/quemSomos");
    }
}
