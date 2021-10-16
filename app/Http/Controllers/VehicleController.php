<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    /**
     * Display a listing of the prducts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all()->where('approved', '=', 1)->sortByDesc('created_at');
        return view('vehicle', compact('vehicles', $vehicles));
    }




    /**
     * Show the step 1 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep1(Request $request)
    {
        $vehicle = $request->session()->get('vehicle');
        return view('ad.vehicle.create-step1', compact('vehicle', $vehicle));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep1(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required',
            'brand' => 'required',
            'model' => 'required',

            'modelyear' => 'required|numeric|min:1900|before:tomorrow(Y)',
            'mileage' => 'required|numeric',
            'engcapacity' => 'required|numeric',
            'condition' => 'required',
            'vehicletype' => 'required',
            'bodytype' => 'required',
            'transmition' => 'required',
            'fueltype' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',

            'name' => 'required',
            'email' => 'required|email',
            'location' => 'required',
            'phonenumber' => 'required|digits:10|numeric',

        ]);

        if (empty($request->session()->get('vehicle'))) {
            $vehicle = new Vehicle();
            $vehicle->fill($validatedData);
            // $request->session()->put('vehicle',  $vehicle);
        } else {
            $vehicle = $request->session()->get('vehicle');
            $vehicle->fill($validatedData);
            // $vehicle->session()->put('vehicle', $vehicle);
        }
        if (isset($request->negotiable)) {
            $vehicle->negotiable = $request->negotiable;
        }
        if (isset($request->edition)) {
            $vehicle->edition = $request->edition;
        }
        if (isset($request->description)) {
            $vehicle->description = $request->description;
        }

        if (isset($request->productimg1)) {
            $request->validate([
                'productimg1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $fileName = "productImage1-" . time() . '.' . request()->productimg1->getClientOriginalExtension();
            $request->productimg1->storeAs('public/temp', $fileName);
            // $request->productimg->move(public_path('products.productimg'), $fileName);
            $vehicle->productimg1 = $fileName;
            $request->session()->put('vehicle', $vehicle);
        }
        if (isset($request->productimg2)) {
            $request->validate([
                'productimg2' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $fileName = "productImage2-" . time() . '.' . request()->productimg2->getClientOriginalExtension();
            $request->productimg2->storeAs('public/temp', $fileName);
            // $request->productimg->move(public_path('products.productimg'), $fileName);
            $vehicle->productimg2 = $fileName;
            $request->session()->put('vehicle', $vehicle);
        }
        if (isset($request->productimg3)) {
            $request->validate([
                'productimg3' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $fileName = "productImage3-" . time() . '.' . request()->productimg3->getClientOriginalExtension();
            $request->productimg3->storeAs('public/temp', $fileName);
            // $request->productimg->move(public_path('products.productimg'), $fileName);
            $vehicle->productimg3 = $fileName;
            $request->session()->put('vehicle', $vehicle);
        }
        if (isset($request->productimg4)) {
            $request->validate([
                'productimg4' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $fileName = "productImage4-" . time() . '.' . request()->productimg4->getClientOriginalExtension();
            $request->productimg4->storeAs('public/temp', $fileName);
            // $request->productimg->move(public_path('products.productimg'), $fileName);
            $vehicle->productimg4 = $fileName;
            $request->session()->put('vehicle', $vehicle);
        }
        if (isset($request->productimg5)) {
            $request->validate([
                'productimg5' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $fileName = "productImage5-" . time() . '.' . request()->productimg5->getClientOriginalExtension();
            $request->productimg5->storeAs('public/temp', $fileName);
            // $request->productimg->move(public_path('products.productimg'), $fileName);
            $vehicle->productimg5 = $fileName;
            $request->session()->put('vehicle', $vehicle);
        }




        $iduu = Auth::id();
        $vehicle->userid = $iduu;
        $request->session()->put('vehicle', $vehicle);



        return redirect('/advertisement/vehicleprev');
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




    /**
     * Store product
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehicle = $request->session()->get('vehicle');

        if (Storage::exists('public/temp/' . $vehicle->productimg1) && isset($vehicle->productimg1)) {
            Storage::copy('public/temp/' . $vehicle->productimg1, 'public/vehicleimg/' . $vehicle->productimg1);
            Storage::delete('public/temp/' . $vehicle->productimg1);
        }
        if (Storage::exists('public/temp/' . $vehicle->productimg2) && isset($vehicle->productimg2)) {
            Storage::copy('public/temp/' . $vehicle->productimg2, 'public/vehicleimg/' . $vehicle->productimg2);
            Storage::delete('public/temp/' . $vehicle->productimg2);
        }
        if (Storage::exists('public/temp/' . $vehicle->productimg3) && isset($vehicle->productimg3)) {
            Storage::copy('public/temp/' . $vehicle->productimg3, 'public/vehicleimg/' . $vehicle->productimg3);
            Storage::delete('public/temp/' . $vehicle->productimg3);
        }
        if (Storage::exists('public/temp/' . $vehicle->productimg4) && isset($vehicle->productimg4)) {
            Storage::copy('public/temp/' . $vehicle->productimg4, 'public/vehicleimg/' . $vehicle->productimg4);
            Storage::delete('public/temp/' . $vehicle->productimg4);
        }
        if (Storage::exists('public/temp/' . $vehicle->productimg5) && isset($vehicle->productimg5)) {
            Storage::copy('public/temp/' . $vehicle->productimg5, 'public/vehicleimg/' . $vehicle->productimg5);
            Storage::delete('public/temp/' . $vehicle->productimg5);
        }

        $vehicle->save();
        $request->session()->forget('vehicle');
        return redirect('/');
    }


    // product view
    public function viewpage(Request $request, $id)
    {
        // $vehicle = Vehicle::where('id', '=', $id);
        // return view('vehiclequickview', compact('vehicle', $vehicle));


        $vehicle = DB::table('vehicles')->where('id', $id)->first();

        return view('vehiclequickview', ['vehicle' => $vehicle]);
    }
}
