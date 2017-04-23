<?php

namespace App\Http\Controllers;

use App\Member;
use App\Coordinator;
use App\Event;
use App\Hod;
use App\EventMember;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HodController extends Controller
{
    public function __construct() {
    	$this->middleware('auth');
    	
    	$this->middleware(function($request, $next) {
    		if((Auth::check()) && (Auth::user()->isHod()))
    			return $next($request);

    		return redirect()->back();
    	});
    }

    private function getEventId() {
    	if(Event::all()->count() > 0) {
    		$event = Event::max('id');
            return $event;
    	}

    	return 0;
    }

    public function viewevent() {

        $events = Event::all();
        return view('event.pages.events', [
            'user' => User::find(Auth::user()->id)->hod,
            'events' => $events,
            'role' => Auth::user()->role
        ]);
    }

    public function editevent($id) {

        $event = Event::find($id);
        $coordinators = Coordinator::all();
        $eventmembers = EventMember::all()->where('e_id',$event->id);
        $members = Member::all();

        return view('event.pages.editevent', [
            'user' => User::find(Auth::user()->id)->hod,
            'event' => $event,
            'members' => $members,
            'coordinators' => $coordinators,
            'eventmembers' => $eventmembers
        ]);
    }

    public function eventform() {

    	$members = Member::all();
        $memcord = Member::all()->where('event_no', 0);
        $coordinators = Coordinator::all();

    	return view('event.pages.createevent', [
    		'user' => User::find(Auth::user()->id)->hod,
            'members' => $members,
            'memcord' => $memcord,
            'coordinators' => $coordinators
    	]);
    }

    public function addevent(Request $request) {

    	$this->validate($request, [
    		'event_name' => 'required',
    		'event_description' => 'required',
    		'event_type' => 'required',
    		'event_sub_type' => 'required',
    		'event_coordinator' => 'required',
    		'event_members' => 'required',
    		'country' => 'required',
    		'state' => 'required',
    		'city' => 'required',
    		'event_start_date' => 'required',
    		'event_end_date' => 'required'
    	]);

    	$name = $request['event_name'];
    	$description = $request['event_description'];
    	$type = $request['event_type'];
    	$sub_type = $request['event_sub_type'];
    	$coordinator = $request['event_coordinator'];
    	$members = $request['event_members'];
    	$country = $request['country'];
    	$state = $request['state'];
    	$city = $request['city'];
    	$start_date = $request['event_start_date'];
    	$end_date = $request['event_end_date'];

    	if($mem = Member::find($coordinator)){
            $coord = new Coordinator();
            $coord->c_id = $mem->m_id;
            $coord->name = $mem->name;
            $coord->dept = $mem->dept;
            $coord->save();

            $user = User::find($coordinator);
            $user->role = 1;
            $user->save();

            $mem->delete();
        }
    	

    	$event = new Event();

    	$id = $this->getEventId()+1;
    	$event->id = $id;
    	$event->name = $name;
    	$event->type = $type;
    	$event->description = $description;
    	$event->sub_type = $sub_type;
    	$event->c_id = $coordinator;
    	$event->h_id = Auth::user()->id;
    	$event->country = $country;
    	$event->state = $state;
    	$event->city = $city;
    	$event->start_date = $start_date;
    	$event->end_date = $end_date;

    	$event->save();

        for ($i=0; $i < sizeof($members); $i++) { 
            $em = new EventMember();
            $em->e_id = $id;
            $em->m_id = $members[$i];
            $em->save();

            Member::find($members[$i])->increment('event_no');
        }

    	return redirect()->route('dashboard');
    }
}