<?php

namespace PRDesign\SiteGen\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteGenBREADController extends Controller
{
    public function index(){
        return view('sitegen::BREAD.index');
    }
}
