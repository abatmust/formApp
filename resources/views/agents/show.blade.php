@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-9">
        <h3>Détail de l'agent</h3>
    <div class="card p-4">
        <div class="row">
            <div class="col-4">
                MLE:
                <b>
                    {{$agent->mle}}
                </b>
            </div>
            <div class="col-4">
                NOM ET PRENOM:
                <b>
                    {{$agent->nom}} {{$agent->prenom}}
                </b>
            </div>
            <div class="col-4">
                DIPLOME:
                <b>
                    {{$agent->diplome}}
                </b>
            </div>
            <div class="col-4">
                AFFECTATION:
                <b>
                    {{$agent->affectation}}
                </b>
            </div>
            <div class="col-4">
                OBSERVATION:
                <b>
                    {{$agent->observation}}
                </b>
            </div>
            
        </div>
    </div>
    </div>
    <div class="col-3 d-print-none">
        <h3>Basculer une formation</h3>
        <div class="card p-2">
        <form action="{{route('agent-formation.store', ['agent' => $agent->id])}}" method="POST">
            @csrf
                <div class="form-group">
                  <label for="formation">Formation:</label>
                  <select class="form-control" name="formation" id="formation">
                      @foreach ($formations as $formation)
                  <option value="{{$formation->id}}">{{$formation->intitule}}</option>
                      @endforeach
                  </select>
                </div>
                <button class="btn btn-sm btn-danger btn-block" type="submit">Basculer</button>
            </form>
        </div>
    </div>
</div>
<h3>Liste des formations</h3>
<div class="card p-4">
    <table class="table table-striped table-bordered table-hover table-sm">
        <thead>
            <tr>
                <th>INTITULE</th>
                <th>DEBUT</th>
                <th>FIN</th>
                <th>DIPLOME</th>
                <th>SPECIALITE</th>
                <th>OBSERVATION</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($agent->formations as $formation)
                <tr>
                    <td scope="row">{{$formation->intitule}}</td>
                    <td>{{date('d/m/Y', strtotime($formation->debut))}}</td>
                    <td>{{date('d/m/Y', strtotime($formation->fin))}}</td>
                    <td>{{$agent->diplome}}</td>
                    <td>{{$agent->specialite}}</td>
                    <td>{{$formation->observation}}</td>
                </tr>
            @empty
            <tr>
                <td colspan="4"><h2 class="text-center">Aucune formation</h2></td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
    
    
@endsection