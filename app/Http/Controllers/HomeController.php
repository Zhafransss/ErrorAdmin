<?php

namespace App\Http\Controllers;

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
    public function login(Request $request)
{
    if (empty($request->input('email')) || !filter_var($request->input('email'), FILTER_VALIDATE_EMAIL)) {
        return redirect()->back()->withErrors(['email' => 'The email field is required.']);
    }

    

    // Proses autentikasi dan logika login lainnya
}

    
     public function index(Request $request)
    {
        return view('home');
    }
}
