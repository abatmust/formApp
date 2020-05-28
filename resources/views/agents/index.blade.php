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
            <th>EDIT</th>
            <th>DETAIL</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($agents as $agent)
            <tr>
                <td scope="row">{{$agent->mle}}</td>
                <td>{{$agent->nom}} {{$agent->prenom}}</td>
                <td>{{$agent->affectation}}</td>
                <td>{{$agent->diplome}}</td>
                <td>{{$agent->observation}}</td>
                <td>
                    <form action="{{route('agents.edit', ['agent' => $agent->id])}}" method="GET">
                        <button class="btn btn-sm btn-primary" type="submit">modifier</button>
                    </form>
                </td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{route('agents.show', ['agent' => $agent->id])}}">Détail</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection