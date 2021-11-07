<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $doctor = Doctor::all();

        if (Auth::user()->role == 'usr') {
            return view('home_usr', compact('doctor'));
        } else if (Auth::user()->role == 'adm') {
            return view('home_adm');
        }
    }
}
