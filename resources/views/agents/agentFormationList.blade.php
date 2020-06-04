@extends('layouts.app')

@section('content')
<h2 class="text-center mb-3">LISTE DES AGENTS AVEC FORMATIONS</h2>
<table class="table table-striped table-bordered table-hover table-sm">
    <thead>
        <tr>
            <th>MLE</th>
            <th>NOM ET PRENOM</th>
            <th>AFFECTATION</th>
            <th>DIPLOME</th>
            <th>SPECIALITE</th>
            <th>OBSERVATION</th>
            <th colspan="2">FORMATIONS</th>
            <th class="d-print-none">EDIT</th>
            <th class="d-print-none">DETAIL</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($agents as $agent)
            <tr>
                <td scope="row">{{$agent->mle}}</td>
                <td>{{$agent->nom}} {{$agent->prenom}}</td>
                <td>{{$agent->affectation}}</td>
                <td>{{$agent->diplome}}</td>
                <td>{{$agent->specialite}}</td>
                <td>{{$agent->observation}}</td>
                <td>{{$agent->formations->count()}}</td>
                <td>
                    <ul class="list-group">
                        @foreach ($agent->formations as $formation)
                    <li class="list-group-item">{{$formation->intitule}} <br> <span class="badge badge-sm badge-info">Du {{date('d/m/Y', strtotime($formation->debut))}}  au {{date('d/m/Y', strtotime($formation->debut))}}</span></li>
                        @endforeach                 
                    </ul>
                   
                </td>
                <td class="d-print-none">
                    <form action="{{route('agents.edit', ['agent' => $agent->id])}}" method="GET">
                        <button class="btn btn-sm btn-primary" type="submit">modifier</button>
                    </form>
                </td>
                <td class="d-print-none">
                    <a class="btn btn-sm btn-warning" href="{{route('agents.show', ['agent' => $agent->id])}}">Détail</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection