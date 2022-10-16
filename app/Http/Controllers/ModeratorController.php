<?php

namespace App\Http\Controllers;

use App\Models\Moderator;
use App\Models\Vehicle;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ModeratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->has('Moderator_LOGIN')) {
            return redirect('Moderator/dashboard');
        } else {
            return view('Moderator.login');
        }
        return view('Moderator.login');
    }

    
}
