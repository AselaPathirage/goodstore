<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\moderator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class moderatorController extends Controller
{
    /**
     * Display a listing of the prducts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moderators = moderator::all()->where('approved', '=', 1)->sortByDesc('created_at');
        return view('moderator', compact('moderators', $moderators));
    }




    /**
     * Show the step 1 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep1(Request $request)
    {
        $moderator = $request->session()->get('moderator');
        return view('ad.moderator.create-step1', compact('moderator', $moderator));
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
            'moderatortype' => 'required',
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

        if (empty($request->session()->get('moderator'))) {
            $moderator = new moderator();
            $moderator->fill($validatedData);
            // $request->session()->put('moderator',  $moderator);
        } else {
            $moderator = $request->session()->get('moderator');
            $moderator->fill($validatedData);
            // $moderator->session()->put('moderator', $moderator);
        }
        if (isset($request->negotiable)) {
            $moderator->negotiable = $request->negotiable;
        }
        if (isset($request->edition)) {
            $moderator->edition = $request->edition;
        }
        if (isset($request->description)) {
            $moderator->description = $request->description;
        }

        if (isset($request->productimg1)) {
            $request->validate([
                'productimg1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $fileName = "productImage1-" . time() . '.' . request()->productimg1->getClientOriginalExtension();
            $request->productimg1->storeAs('public/temp', $fileName);
            // $request->productimg->move(public_path('products.productimg'), $fileName);
            $moderator->productimg1 = $fileName;
            $request->session()->put('moderator', $moderator);
        }
        if (isset($request->productimg2)) {
            $request->validate([
                'productimg2' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $fileName = "productImage2-" . time() . '.' . request()->productimg2->getClientOriginalExtension();
            $request->productimg2->storeAs('public/temp', $fileName);
            // $request->productimg->move(public_path('products.productimg'), $fileName);
            $moderator->productimg2 = $fileName;
            $request->session()->put('moderator', $moderator);
        }
        if (isset($request->productimg3)) {
            $request->validate([
                'productimg3' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $fileName = "productImage3-" . time() . '.' . request()->productimg3->getClientOriginalExtension();
            $request->productimg3->storeAs('public/temp', $fileName);
            // $request->productimg->move(public_path('products.productimg'), $fileName);
            $moderator->productimg3 = $fileName;
            $request->session()->put('moderator', $moderator);
        }
        if (isset($request->productimg4)) {
            $request->validate([
                'productimg4' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $fileName = "productImage4-" . time() . '.' . request()->productimg4->getClientOriginalExtension();
            $request->productimg4->storeAs('public/temp', $fileName);
            // $request->productimg->move(public_path('products.productimg'), $fileName);
            $moderator->productimg4 = $fileName;
            $request->session()->put('moderator', $moderator);
        }
        if (isset($request->productimg5)) {
            $request->validate([
                'productimg5' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $fileName = "productImage5-" . time() . '.' . request()->productimg5->getClientOriginalExtension();
            $request->productimg5->storeAs('public/temp', $fileName);
            // $request->productimg->move(public_path('products.productimg'), $fileName);
            $moderator->productimg5 = $fileName;
            $request->session()->put('moderator', $moderator);
        }




        $iduu = Auth::id();
        $moderator->userid = $iduu;
        $request->session()->put('moderator', $moderator);



        return redirect('/advertisement/moderatorprev');
    }

    /**
     * Show the step 2 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */

    public function createStep2(Request $request)
    {
        $moderator = $request->session()->get('moderator');
        return view('ad.moderator.create-step2', compact('moderator', $moderator));
    }




    /**
     * Store product
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $moderator = $request->session()->get('moderator');

        if (Storage::exists('public/temp/' . $moderator->productimg1) && isset($moderator->productimg1)) {
            Storage::copy('public/temp/' . $moderator->productimg1, 'public/moderatorimg/' . $moderator->productimg1);
            Storage::delete('public/temp/' . $moderator->productimg1);
        }
        if (Storage::exists('public/temp/' . $moderator->productimg2) && isset($moderator->productimg2)) {
            Storage::copy('public/temp/' . $moderator->productimg2, 'public/moderatorimg/' . $moderator->productimg2);
            Storage::delete('public/temp/' . $moderator->productimg2);
        }
        if (Storage::exists('public/temp/' . $moderator->productimg3) && isset($moderator->productimg3)) {
            Storage::copy('public/temp/' . $moderator->productimg3, 'public/moderatorimg/' . $moderator->productimg3);
            Storage::delete('public/temp/' . $moderator->productimg3);
        }
        if (Storage::exists('public/temp/' . $moderator->productimg4) && isset($moderator->productimg4)) {
            Storage::copy('public/temp/' . $moderator->productimg4, 'public/moderatorimg/' . $moderator->productimg4);
            Storage::delete('public/temp/' . $moderator->productimg4);
        }
        if (Storage::exists('public/temp/' . $moderator->productimg5) && isset($moderator->productimg5)) {
            Storage::copy('public/temp/' . $moderator->productimg5, 'public/moderatorimg/' . $moderator->productimg5);
            Storage::delete('public/temp/' . $moderator->productimg5);
        }

        $moderator->save();
        $request->session()->forget('moderator');
        return redirect('/');
    }


    // product view
    public function viewpage(Request $request, $id)
    {
        // $moderator = moderator::where('id', '=', $id);
        // return view('moderatorquickview', compact('moderator', $moderator));


        $moderator = DB::table('moderators')->where('id', $id)->first();

        return view('moderatorquickview', ['moderator' => $moderator]);
    }
}
