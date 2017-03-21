<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller {

	protected $redirectTo = 'admin/dashboard';

	public function __construct() {
		$this->middleware('guest:admin');
	}
    
    public function login(Request $request) {
    	$this->validate($request, [
    		'email' => 'required|email|exists:admins',
    		'password' => 'required'
    	]);

    	$email = $request['email'];
    	$password = $request['password'];

    	if(Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])){
    		return redirect()->intended(route('admin.dashboard'));
    	}

    	return redirect()->back()->withInput($request->only('email'));
    }

} 
