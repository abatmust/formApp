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
                    {{date('d/m/Y', strtotime($formation->debut))}}  au {{date('d/m/Y', strtotime($formation->fin))}}
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
    <div class="col-3 d-print-none">
        <h3>Basculer un agent</h3>
        <div class="card p-2">
        <form action="{{route('agent-formation.store', ['formation' => $formation->id])}}" method="POST">
            @csrf
                <div class="form-group">
                  <label for="agent">Agent:</label>
                  <select class="form-control" name="agent" id="agent">
                      @foreach ($agents as $agent)
                  <option value="{{$agent->id}}">{{$agent->mle}} {{$agent->nom}} {{$agent->prenom}}</option>
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
    <table class="table table-striped table-bordered table-hover table-sm">
        <thead>
            <tr>
                <th>Matricule</th>
                <th>NOM ET PRENOM</th>
                <th>AFFECTATION</th>
                <th>DIPLOME</th>
                <th>SPECIALITE</th>
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
                    <td>{{$agent->specialite}}</td>
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
<div class="card p-4 mt-2">
    <form action="{{route('formations.destroy', ['formation' => $formation->id])}}" method="POST">
            @method('DELETE')
            @csrf
                
                <button class="btn btn-sm btn-danger" type="submit">Supprimer cette formation</button>
    </form>
</div>
    
    
@endsection