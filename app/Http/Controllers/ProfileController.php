<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request){
        return view('services.profile');
    }
    public function index2(Request $request){
        return view('services.profileUmum');
    }

    
}
