<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
    
    public function register(Request $request) {
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

    	$user = new User();

    	$user->id = $id;
    	$user->name = $name;
    	$user->email = $email;
    	$user->dept = $dept;
    	$user->password = bcrypt($password);

    	$user->save();

    	Auth::login($user);
    	$user = Auth::user();
    	return redirect()->route('dashboard');
    }

    public function login(Request $request) {
    	$this->validate($request, [
    		'email' => 'required',
    		'password' => 'required'
    	]);

    	$email = $request['email'];
    	$password = $request['password'];

    	if(Auth::attempt(['email' => $email, 'password' => $password])){
    		return redirect()->route('dashboard');
    	}

    	return redirect()->back();
    }

    public function logout() {
    	Auth::logout();

    	return redirect()->route('welcome');
    }

    public function getDashboard() {
        $user = Auth::user();
        return view('dashboard.pages.dashboard', ['user' => $user]);
    }
}
