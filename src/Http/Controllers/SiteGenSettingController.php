<?php

namespace PRDesign\SiteGen\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteGenSettingController extends Controller
{
    public function index(){
        return view('sitegen::setting.browse');
    }
}
