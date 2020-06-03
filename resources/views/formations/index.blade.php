@extends('layouts.app')

@section('content')


<div class="btn btn-success mb-4">ajouter</div>

<table class="table">
    <thead>
        <tr>
            <th>INTITULE</th>
            <th>DEBUT</th>
            <th>FIN</th>
            <th>OBSERVATION</th>
            <th>EDIT</th>
            <th>DETAIL</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($formations as $formation)
            <tr>
                <td scope="row">{{$formation->intitule}}</td>
                <td>{{$formation->debut}}</td>
                <td>{{$formation->fin}}</td>
                <td>{{$formation->observation}}</td>
                <td>
                    <form action="{{route('formations.edit', ['formation' => $formation->id])}}" method="GET">
                        <button class="btn btn-sm btn-primary" type="submit">modifier</button>
                    </form>
                </td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{route('formations.show', ['formation' => $formation->id])}}">Détail</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection