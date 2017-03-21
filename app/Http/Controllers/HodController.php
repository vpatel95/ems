<?php

namespace App\Http\Controllers;

use App\Member;
use App\Coordinator;
use App\Event;
use App\Hod;
use App\EventMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HodController extends Controller
{
    public function __construct() {
    	$this->middleware('auth');
    }

    public function eventform() {
    	return view('event.pages.createevent');
    }

    public function addevent(Request $request) {
    	return true;
    }
}