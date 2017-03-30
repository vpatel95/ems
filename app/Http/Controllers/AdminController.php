<?php

namespace App\Http\Controllers;

use App\User;
use App\Hod;
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
        return view('dashboard.pages.admin', [
            'user' => Auth::user()
        ]);
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect()->route('admin');
    }

    public function hodform() {
        return view('loginReg.pages.createhod');
    }

    public function addhod(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
            'id' => 'required|numeric|unique:users',
            'dept' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $name = $request['name'];
        $id = $request['id'];
        $dept = $request['dept'];
        $email = $request['email'];
        $password = $request['password'];

        //New User Entry
        $user = new User();

        $user->id = $id;
        $user->email = $email;
        $user->role = 2;
        $user->password = bcrypt($password);
        $user->save();

        //Enter the user in Member
        $hod = new Hod();

        $hod->h_id = $id;
        $hod->name = $name;
        $hod->dept = $dept;

        $hod->save();

        return redirect()->route('admin.dashboard');
    }
}
