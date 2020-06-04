@extends('layouts.app')

@section('content')



<a class="btn btn-success mb-4 d-print-none" href="{{route('formations.create')}}">ajouter une formation</a>
<h2 class="text-center mb-3">LISTE DES FORMATIONS</h2>
<table class="table table-striped table-bordered table-hover table-sm">
    <thead>
        <tr>
            <th>INTITULE</th>
            <th>DEBUT</th>
            <th>FIN</th>
            <th>OBSERVATION</th>
            <th class="d-print-none">EDIT</th>
            <th class="d-print-none">DETAIL</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($formations as $formation)
            <tr>
                <td scope="row">{{$formation->intitule}}</td>
                <td>{{date('d/m/Y', strtotime($formation->debut))}}</td>
                <td>{{date('d/m/Y', strtotime($formation->fin))}}</td>
                <td>{{$formation->observation}}</td>
                <td class="d-print-none">
                    <form action="{{route('formations.edit', ['formation' => $formation->id])}}" method="GET">
                        <button class="btn btn-sm btn-primary" type="submit">modifier</button>
                    </form>
                </td>
                <td class="d-print-none">
                    <a class="btn btn-sm btn-warning" href="{{route('formations.show', ['formation' => $formation->id])}}">Détail</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection