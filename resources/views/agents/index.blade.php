@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>MLE</th>
            <th>NOM ET PRENOM</th>
            <th>AFFECTATION</th>
            <th>DIPLOME</th>
            <th>OBSERVATION</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($agents as $agent)
            <tr>
                <td scope="row">{{$agent->mle}}</td>
                <td>{{$agent->nom}}</td>
                <td>{{$agent->affectation}}</td>
                <td>{{$agent->diplome}}</td>
                <td>{{$agent->observation}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection