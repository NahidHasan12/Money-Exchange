<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile(){
        return view('customer.home');
    }
    public function logout(){
       Auth::logout();
       return redirect()->route('home');
    }
}
