<?php

namespace App\Http\Controllers;

use App\Models\Padarias;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view("/dreambrownie/produtos");
    }
}
