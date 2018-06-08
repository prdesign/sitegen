<?php

namespace PRDesign\SiteGen\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteGenUserController extends Controller
{
    public function index(){
        return view('sitegen::user.index');
    }
}
