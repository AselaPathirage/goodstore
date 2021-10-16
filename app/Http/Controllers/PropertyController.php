<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    /**
     * Display a listing of the prducts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::all()->where('approved', '=', 1)->sortByDesc('created_at');
        return view('property', compact('properties', $properties));
    }




    /**
     * Show the step 1 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep1(Request $request)
    {
        $property = $request->session()->get('property');
        return view('ad.property.create-step1', compact('property', $property));
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
            'type' => 'required',
            'category' => 'required',
            'pricetype' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'name' => 'required',
            'email' => 'required|email',
            'location' => 'required',
            'phonenumber' => 'required|digits:10|numeric',

        ]);

        if (empty($request->session()->get('property'))) {
            $property = new Property();
            $property->fill($validatedData);
            // $request->session()->put('vehicle',  $vehicle);
        } else {
            $property = $request->session()->get('property');
            $property->fill($validatedData);
            // $vehicle->session()->put('vehicle', $vehicle);
        }
        if (isset($request->negotiable)) {
            $property->negotiable = $request->negotiable;
        }
        if (isset($request->size)) {
            $property->size = $request->size;
        }
        if (isset($request->description)) {
            $property->description = $request->description;
        }

        if (isset($request->productimg1)) {
            $request->validate([
                'productimg1' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $fileName = "productpropImage1-" . time() . '.' . request()->productimg1->getClientOriginalExtension();
            $request->productimg1->storeAs('public/temp', $fileName);
            // $request->productimg->move(public_path('products.productimg'), $fileName);
            $property->productimg1 = $fileName;
            $request->session()->put('property', $property);
        }
        if (isset($request->productimg2)) {
            $request->validate([
                'productimg2' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $fileName = "productpropImage2-" . time() . '.' . request()->productimg2->getClientOriginalExtension();
            $request->productimg2->storeAs('public/temp', $fileName);
            // $request->productimg->move(public_path('products.productimg'), $fileName);
            $property->productimg2 = $fileName;
            $request->session()->put('property', $property);
        }
        if (isset($request->productimg3)) {
            $request->validate([
                'productimg3' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $fileName = "productpropImage3-" . time() . '.' . request()->productimg3->getClientOriginalExtension();
            $request->productimg3->storeAs('public/temp', $fileName);
            // $request->productimg->move(public_path('products.productimg'), $fileName);
            $property->productimg3 = $fileName;
            $request->session()->put('property', $property);
        }
        if (isset($request->productimg4)) {
            $request->validate([
                'productimg4' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $fileName = "productpropImage4-" . time() . '.' . request()->productimg4->getClientOriginalExtension();
            $request->productimg4->storeAs('public/temp', $fileName);
            // $request->productimg->move(public_path('products.productimg'), $fileName);
            $property->productimg4 = $fileName;
            $request->session()->put('property', $property);
        }
        if (isset($request->productimg5)) {
            $request->validate([
                'productimg5' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $fileName = "productpropImage5-" . time() . '.' . request()->productimg5->getClientOriginalExtension();
            $request->productimg5->storeAs('public/temp', $fileName);
            // $request->productimg->move(public_path('products.productimg'), $fileName);
            $property->productimg5 = $fileName;
            $request->session()->put('property', $property);
        }




        $iduu = Auth::id();
        $property->userid = $iduu;
        $request->session()->put('property', $property);



        return redirect('/advertisement/propertyprev');
    }

    /**
     * Show the step 2 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

    public function createStep2(Request $request)
    {
        $property = $request->session()->get('property');
        return view('ad.property.create-step2', compact('property', $property));
    }




    /**
     * Store product
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $property = $request->session()->get('property');

        if (Storage::exists('public/temp/' . $property->productimg1) && isset($property->productimg1)) {
            Storage::copy('public/temp/' . $property->productimg1, 'public/propertyimg/' . $property->productimg1);
            Storage::delete('public/temp/' . $property->productimg1);
        }
        if (Storage::exists('public/temp/' . $property->productimg2) && isset($property->productimg2)) {
            Storage::copy('public/temp/' . $property->productimg2, 'public/propertyimg/' . $property->productimg2);
            Storage::delete('public/temp/' . $property->productimg2);
        }
        if (Storage::exists('public/temp/' . $property->productimg3) && isset($property->productimg3)) {
            Storage::copy('public/temp/' . $property->productimg3, 'public/propertyimg/' . $property->productimg3);
            Storage::delete('public/temp/' . $property->productimg3);
        }
        if (Storage::exists('public/temp/' . $property->productimg4) && isset($property->productimg4)) {
            Storage::copy('public/temp/' . $property->productimg4, 'public/propertyimg/' . $property->productimg4);
            Storage::delete('public/temp/' . $property->productimg4);
        }
        if (Storage::exists('public/temp/' . $property->productimg5) && isset($property->productimg5)) {
            Storage::copy('public/temp/' . $property->productimg5, 'public/propertyimg/' . $property->productimg5);
            Storage::delete('public/temp/' . $property->productimg5);
        }

        $property->save();
        $request->session()->forget('property');
        return redirect('/');
    }


    // product view
    public function viewpage(Request $request, $id)
    {
        // $vehicle = Vehicle::where('id', '=', $id);
        // return view('vehiclequickview', compact('vehicle', $vehicle));


        $property = DB::table('properties')->where('id', $id)->first();

        return view('propertyquickview', ['property' => $property]);
    }
}
