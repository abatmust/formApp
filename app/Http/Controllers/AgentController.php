<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Formation;
use App\Http\Requests\StoreAgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agent::all();
        return view('agents.index', ['agents' => $agents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgentRequest $request)
    {
        $agent = Agent::create($request->only(['mle','nom', 'prenom', 'affectation', 'diplome', 'observation']));
        return redirect()->route('agents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
        $formations = Formation::select('id', 'intitule')->get();
        return view('agents.show', ['agent' => $agent, 'formations' => $formations]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        return view('agents.edit', ['agent' => $agent]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgentRequest $request, Agent $agent)
    {
        $agent->update($request->only(['mle','nom', 'prenom', 'affectation', 'diplome', 'observation']));
        return redirect()->route('agents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        //
    }
    public function agentFormationList(){
        $agents = Agent::with(['formations'])->get();
        return view('agents.agentFormationList', ['agents' => $agents]);
    }
}
