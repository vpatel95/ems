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

class CoordinatorController extends Controller
{
    
    public function __construct() {

    	$this->middleware('auth');
    	
    	$this->middleware(function($request, $next) {
    		if((Auth::check()) && (Auth::user()->isCoordinator()))
    			return $next($request);

    		return redirect()->back();
    	});
    }

    public function viewevent() {

    	$events = Event::all()->where('c_id', Auth::user()->id);
    	return view('event.pages.events', [
            'user' => User::find(Auth::user()->id)->coordinator,
    		'events' => $events,
            'role' => Auth::user()->role
    	]);
    }

    public function editevent($id) {

    	$event = Event::find($id);
    	$coordinators = Coordinator::all();
    	$members = Member::all();
        $memcord = Member::all()->where('event_no', '<', 2);
    	$eventmembers = EventMember::all()->where('e_id',$event->id);

    	return view('event.pages.editevent', [
    		'user' => User::find(Auth::user()->id)->coordinator,
            'event' => $event,
    		'coordinators' => $coordinators,
            'memcord' => $memcord,
    		'members' => $members,
    		'eventmembers' => $eventmembers
    	]);
    }

    public function updateevent($id, Request $request) {

        $event = Event::find($id);
        $event_members = EventMember::all()->where('e_id', $event->id);

        for ($i=0; $i < sizeof($event_members) ; $i++) { 
            $m = Member::find($event_members[$i]->m_id)->decrement('event_no');
        }

        EventMember::where('e_id', $event->id)->delete();

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

        
        $event->name = $name;
        $event->type = $type;
        $event->description = $description;
        $event->sub_type = $sub_type;
        $event->c_id = $coordinator;
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
