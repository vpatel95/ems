<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance
     * 
     * @return void
     */

    public function __construct() {
    	$this->middleware('auth:admin');
    }

    /**
     * Show the admin dashboard
     * 
     * @return \Illuminate\Http\Response
     */

    public function dashboard() {
        return view('dashboard.pages.admin');
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect()->route('admin');
    }
}
