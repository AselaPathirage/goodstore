<?php

namespace App\Http\Controllers\Ad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function category()
    {
        if (Auth::check()) {
            // The user is logged in...
            return view('ad/category');
        } else {
            return view('auth.login');
        }
    }
}
