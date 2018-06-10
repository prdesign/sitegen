<?php

namespace PRDesign\SiteGen\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteGenFormBuilderController extends Controller
{
    public function index(){

        $formData = [
            [
                'position' => 0,
                'name' => 'username',
                'type' => 'input',
                'class' => 'txtInput',
            ]
        ];

        return view('sitegen::formbuilder.index' , [ 'formData' => $formData ]);
    }
}
