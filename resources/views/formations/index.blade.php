@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>INTITULE</th>
            <th>DEBUT</th>
            <th>FIN</th>
            <th>OBSERVATION</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($formations as $formation)
            <tr>
                <td scope="row">{{$formation->intitule}}</td>
                <td>{{$formation->debut}}</td>
                <td>{{$formation->fin}}</td>
                <td>{{$formation->observation}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection