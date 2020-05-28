@extends('layouts.app')

@section('content')
    <h1>modifier un agent</h1>
    <form action="{{ route('agents.update', ['agent' => $agent->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col-12">
            <x-errors></x-errors>
          </div>
            <div class="col">
                <div class="form-group">
                    <label for="mle">Matricule</label>
                    <input type="text"
                class="form-control" name="mle" id="mle" aria-describedby="helpId" placeholder="Matricule" value="{{old('mle', $agent->mle)}}">
                    <small id="helpId" class="form-text text-muted">* obligatoire</small>
                  </div>
                  <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text"
                      class="form-control" name="nom" id="nom" aria-describedby="helpId" placeholder="Nom" value="{{old('nom', $agent->nom)}}">
                    <small id="helpId" class="form-text text-muted">* obligatoire</small>
                  </div>
                  <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text"
                      class="form-control" name="prenom" id="prenom" aria-describedby="helpId" placeholder="Prénom" value="{{old('prenom', $agent->prenom)}}">
                    <small id="helpId" class="form-text text-muted">* obligatoire</small>
                  </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="affectation">Affectation</label>
                    <input type="text"
                      class="form-control" name="affectation" id="affectation" aria-describedby="helpId" placeholder="Affectation" value="{{old('affectation', $agent->affectation)}}">
                    <small id="helpId" class="form-text text-muted">* obligatoire</small>
                  </div>
                  <div class="form-group">
                    <label for="diplome">Diplôme</label>
                    <input type="text"
                      class="form-control" name="diplome" id="diplome" aria-describedby="helpId" placeholder="Diplôme" value="{{old('diplome', $agent->diplome)}}">
                    <small id="helpId" class="form-text text-muted">* obligatoire</small>
                  </div>
                  <div class="form-group">
                    <label for="observation">Observation</label>
                      <textarea class="form-control" name="observation" id="observation" aria-describedby="helpId" placeholder="Observation" rows="2">{{old('observation', $agent->observation)}}</textarea>
                    <small id="helpId" class="form-text text-muted"></small>
                  </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">modifier</button>
        </div>


        
        
    </form>
@endsection