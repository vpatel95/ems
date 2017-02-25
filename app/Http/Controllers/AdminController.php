<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use App\Hod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller {

	public function login(Request $request) {
		$this->validate($request, [
			'email' => 'required',
			'password' => 'required'
		]);

		$email = $request['email'];
		$password = $request['password'];

		if(Auth::attempt(['email' => $email, 'password' => $password])) {
			return redirect()->route('admin.dashboard');
		}

		return redirect()->back();
	}

	public function add(Request $request) {
		$this->validate($request, [
			'name' => 'required|string',
    		'email' => 'required|email|unique:admins',
    		'password' => 'required|min:6'
		]);

		$email = $request['email'];
		$password = $request['password'];
		$name = $request['name'];

		$admin = new Admin();

		$admin->name = $name;
		$admin->email = $email;
		$admin->password = bcrypt($password);

		$admin->save();

		if(Auth::attempt(['email' => $email, 'password' => $password])) {
			return redirect()->route('admin.dashboard');
		}
	}

	public function logout() {
    	Auth::logout();

    	return redirect()->route('admin');
    }

    public function getDashboard() {
    	$admin = Auth::user();
    	return view('dashboard.pages.adminDashboard', [
    		'admin' => $admin
    	]);
    }

    public function addHod(Request $request) {
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
        $role = 2;
        //New User Entry
    	$user = new User();

    	$user->id = $id;
    	$user->email = $email;
    	$user->password = bcrypt($password);
        $user->role = $role;
        $user->save();

        //Enter the user in Member
        $hod = new Hod();

        $hod->h_id = $id;
        $hod->name = $name;
        $hod->dept = $dept;

        $hod->save();

        return redirect()->route('admin.dashboard;');
    } 
    
}
