<?php

namespace App\Http\Controllers;

use App\Agent;
use Illuminate\Http\Request;

class AgentFormationController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
       
    }
    public function store(Request $request){

        $agent = Agent::findOrFail($request->input('agent'));
        $agent->formations()->toggle([$request->input('formation')]);
        return redirect()->back();
    }
}
