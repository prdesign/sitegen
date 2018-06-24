<?php

namespace PRDesign\SiteGen\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteGenPageController extends Controller
{
    public function browse(){

        return view('sitegen::page.browse');
    }

    public function read(){

        return view('sitegen::page.read');
    }

    public function edit(){

        return view('sitegen::page.add-edit');
    }

    public function add(){

        return view('sitegen::page.add-edit');
    }

    public function delete(){

        return view('sitegen::page.browse');
    }

}
