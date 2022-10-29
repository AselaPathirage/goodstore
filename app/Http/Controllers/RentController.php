<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class RentController extends Controller
{
    /**
     * Display a listing of the prducts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Rent::all()->where('approved', '=', 1)->sortByDesc('created_at');
        return view('property', compact('properties', $properties));
    }


    // product view
    public function viewpage(Request $request, $id)
    {


        $rent = DB::table('properties')->where('id', $id)->first();

        return view('rentquickview', ['rent' => $rent]);
    }
}
