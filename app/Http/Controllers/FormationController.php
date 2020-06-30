<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Formation;
use App\Http\Requests\StoreFormationRequest;
use Illuminate\Http\Request;

class FormationController extends Controller
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
        $formations = Formation::all();
        return view('formations.index', ['formations' => $formations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormationRequest $request)
    {
        $formation = Formation::create($request->only(['intitule','debut', 'fin', 'observation']));
        return redirect()->route('formations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show(Formation $formation)
    {
        $agents = Agent::select('id', 'mle', "nom", "prenom")->orderBy('nom')->get();
        return view('formations.show', ['formation' => $formation, 'agents' => $agents]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation)
    {
        return view('formations.edit', ['formation' => $formation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formation $formation)
    {
        $formation->update($request->only(['intitule','debut', 'fin', 'observation']));
        return redirect()->route('formations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $formation)
    {
        $formation->delete();
        return redirect()->route('formations.index');
    }
}
