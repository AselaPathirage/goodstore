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

    public function auth(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');

        // $result=Moderator::where(['email'=>$email,'password'=>$password])->get();
        $result = Moderator::where(['email' => $email])->first();
        if ($result) {
            if (Hash::check($request->post('password'), $result->password)) {
                $request->session()->put('Moderator_LOGIN', true);
                $request->session()->put('Moderator_ID', $result->id);
                return redirect('Moderator/dashboard');
            } else {
                $request->session()->flash('error', 'Please enter correct password');
                return redirect('Moderator');
            }
        } else {
            $request->session()->flash('error', 'Please enter valid login details');
            return redirect('Moderator');
        }
    }

     /**
     * Show the step 2 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

    public function createStep2(Request $request)
    {
        $vehicle = $request->session()->get('vehicle');
        return view('ad.vehicle.create-step2', compact('vehicle', $vehicle));
    }
    
}
