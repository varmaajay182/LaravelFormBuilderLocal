<?php

namespace App\Http\Controllers;

use Codecrewinfotech\FormBuilder\Models\formBuilder;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function register(){
       
        // dd();
        return view('form');
    }

    public function testData(Request $request){
        dd($request->all());
    }
}
