@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-9">
        <h3>Détail d'une formation</h3>
    <div class="card p-4">
        <div class="row">
            <div class="col-6">
                INTITULE:
                <b>
                    {{$formation->intitule}}
                </b>
            </div>
            <div class="col-6">
                PERIODE:
                <b>
                    {{$formation->debut}}  au {{$formation->fin}}
                </b>
            </div>
            <div class="col-12">
                OBSERVATION:
                <b>
                    {{$formation->observation}}
                </b>
            </div>
                        
        </div>
    </div>
    </div>
    <div class="col-3">
        <h3>Basculer un agent</h3>
        <div class="card p-2">
        <form action="{{route('agent-formation.store', ['formation' => $formation->id])}}" method="POST">
            @csrf
                <div class="form-group">
                  <label for="agent">Agent:</label>
                  <select class="form-control" name="agent" id="agent">
                      @foreach ($agents as $agent)
                  <option value="{{$agent->id}}">{{$agent->mle}}</option>
                      @endforeach
                  </select>
                </div>
                <button class="btn btn-sm btn-danger btn-block" type="submit">Basculer</button>
            </form>
        </div>
    </div>
</div>
<h3>Liste des agents</h3>
<div class="card p-4">
    <table class="table">
        <thead>
            <tr>
                <th>Matricule</th>
                <th>NOM ET PRENOM</th>
                <th>AFFECTATION</th>
                <th>DIPLOME</th>
                <th>OBSERVATION</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($formation->agents as $agent)
                <tr>
                    <td scope="row">{{$agent->mle}}</td>
                    <td>{{$agent->nom}} {{$agent->prenom}}</td>
                    <td>{{$agent->affectation}}</td>
                    <td>{{$agent->diplome}}</td>
                    <td>{{$agent->observation}}</td>
                </tr>
            @empty
            <tr>
                <td colspan="4"><h2 class="text-center">Aucun agent</h2></td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
    
    
@endsection