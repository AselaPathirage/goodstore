<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Vehicle;
use App\Models\Property;
use App\Models\Rent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->has('ADMIN_LOGIN')) {
            return redirect('admin/dashboard');
        } else {
            return view('admin.login');
        }
        return view('admin.login');
    }

    public function auth(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');

        // $result=Admin::where(['email'=>$email,'password'=>$password])->get();
        $result = Admin::where(['email' => $email])->first();
        if ($result) {
            if (Hash::check($request->post('password'), $result->password)) {
                $request->session()->put('ADMIN_LOGIN', true);
                $request->session()->put('ADMIN_ID', $result->id);
                return redirect('admin/dashboard');
            } else {
                $request->session()->flash('error', 'Please enter correct password');
                return redirect('admin');
            }
        } else {
            $request->session()->flash('error', 'Please enter valid login details');
            return redirect('admin');
        }
    }
    public function conf(Request $request)
    {

        // $request->validate([
        //     'password' => 'required',
        //     'npassword' => 'required|string|confirmed',
        //     'cnpassword' => 'required',
        // ]);

        $id = $request->session()->get('ADMIN_ID');
        $result = Admin::where(['id' => $id])->first();

        if ($result) {
            if (Hash::check($request->password, $result->password)) {
                $result->password = Hash::make($request->npassword);
                $result->save();
                $request->session()->flash('error', 'Updated Successfully');
                return view('admin.account');
            } else {
                $request->session()->flash('error', 'Please enter correct password');
                return redirect('admin/account');
            }
        } else {
            $request->session()->flash('error', 'Please enter valid login details');
            return redirect('admin/account');
        }
    }

    public function dashboard()
    {
        $vehicles = DB::table('vehicles')->where('approved', '0')->get()->count();
        $properties = DB::table('properties')->where('approved', '0')->get()->count();

        return view('admin.dashboard', compact(['vehicles', 'properties']));
    }
    public function vehicles()
    {
        $vehicles = DB::table('vehicles')
            ->join('users', 'vehicles.userid', '=', 'users.id')
            ->select('vehicles.*', 'users.email', 'users.name')
            ->where('approved', '=', 0)
            ->get();
        // $vehicles = Vehicle::all()->where('approved', '=', 0);
        return view('admin.vehicles', compact('vehicles', $vehicles));
    }
    public function vehicleapp($id)
    {
        $page = Vehicle::find($id);

        // Make sure you've got the Page model
        if ($page) {
            $page->approved = '1';
            $page->save();
        }
        // $vehicles = Vehicle::all()->where('approved', '=', 0);
        return redirect('admin/vehicles');
    }
    public function vehicledel($id)
    {
        $vehicle = Vehicle::find($id);
        if (Storage::exists('public/vehicleimg/' . $vehicle->productimg1)) {
            Storage::delete('public/vehicleimg/' . $vehicle->productimg1);
        }
        if (Storage::exists('public/vehicleimg/' . $vehicle->productimg2)) {
            Storage::delete('public/vehicleimg/' . $vehicle->productimg2);
        }
        if (Storage::exists('public/vehicleimg/' . $vehicle->productimg3)) {
            Storage::delete('public/vehicleimg/' . $vehicle->productimg3);
        }
        if (Storage::exists('public/vehicleimg/' . $vehicle->productimg4)) {
            Storage::delete('public/vehicleimg/' . $vehicle->productimg4);
        }
        if (Storage::exists('public/vehicleimg/' . $vehicle->productimg5)) {
            Storage::delete('public/vehicleimg/' . $vehicle->productimg5);
        }
        $vehicle->delete();
        return redirect('admin/vehicles');
    }
    public function properties()
    {
        $properties = DB::table('properties')
            ->join('users', 'properties.userid', '=', 'users.id')
            ->select('properties.*', 'users.email', 'users.name')
            ->where('approved', '=', 0)
            ->get();
        // $vehicles = Vehicle::all()->where('approved', '=', 0);
        return view('admin.properties', compact('properties', $properties));
    }
    public function propertyapp($id)
    {
        $page = Property::find($id);

        // Make sure you've got the Page model
        if ($page) {
            $page->approved = '1';
            $page->save();
        }
        // $vehicles = Vehicle::all()->where('approved', '=', 0);
        return redirect('admin/properties');
    }
    public function propertydel($id)
    {
        $property = Property::find($id);
        if (Storage::exists('public/propertyimg/' . $property->productimg1)) {
            Storage::delete('public/propertyimg/' . $property->productimg1);
        }
        if (Storage::exists('public/propertyimg/' . $property->productimg2)) {
            Storage::delete('public/propertyimg/' . $property->productimg2);
        }
        if (Storage::exists('public/propertyimg/' . $property->productimg3)) {
            Storage::delete('public/propertyimg/' . $property->productimg3);
        }
        if (Storage::exists('public/propertyimg/' . $property->productimg4)) {
            Storage::delete('public/propertyimg/' . $property->productimg4);
        }
        if (Storage::exists('public/propertyimg/' . $property->productimg5)) {
            Storage::delete('public/propertyimg/' . $property->productimg5);
        }
        $property->delete();
        return redirect('admin/properties');
    }
    public function rents()
    {
        $properties = DB::table('rents')
            ->join('users', 'rents.userid', '=', 'users.id')
            ->select('rents.*', 'users.email', 'users.name')
            ->where('approved', '=', 0)
            ->get();
        // $vehicles = Vehicle::all()->where('approved', '=', 0);
        return view('admin.properties', compact('properties', $properties));
    }
    public function rentapp($id)
    {
        $page = Rent::find($id);

        // Make sure you've got the Page model
        if ($page) {
            $page->approved = '1';
            $page->save();
        }
        // $vehicles = Vehicle::all()->where('approved', '=', 0);
        return redirect('admin/rents');
    }
}
