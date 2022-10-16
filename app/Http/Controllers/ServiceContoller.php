<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the prducts.
     *
     * @return \Illuminate\Http\Response
     */
   

    // product view
    public function serviceviewpage(Request $request, $id)
    {
        // $Service = Service::where('id', '=', $id);
        // return view('Servicequickview', compact('Service', $Service));


        $Service = DB::table('Services')->where('id', $id)->first();

        return view('Servicequickview', ['Service' => $Service]);
    }

    public function postserviceAd(Request $request)
    {
        $Service = $request->session()->get('Service');
        return view('ad.Service.create-step1', compact('Service', $vehicle));
    }
}
