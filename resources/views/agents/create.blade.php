@extends('layouts.app')

@section('content')
    <h1>ajouter un agent</h1>
    <form action="{{ route('agents.store') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-12">
            <x-errors></x-errors>
          </div>
            <div class="col">
                <div class="form-group">
                    <label for="mle">Matricule</label>
                    <input type="text"
                class="form-control" name="mle" id="mle" aria-describedby="helpId" placeholder="Matricule" value="{{old('mle', null)}}">
                    <small id="helpId" class="form-text text-muted">* obligatoire</small>
                  </div>
                  <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text"
                      class="form-control" name="nom" id="nom" aria-describedby="helpId" placeholder="Nom" value="{{old('nom', null)}}">
                    <small id="helpId" class="form-text text-muted">* obligatoire</small>
                  </div>
                  <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text"
                      class="form-control" name="prenom" id="prenom" aria-describedby="helpId" placeholder="Prénom" value="{{old('prenom', null)}}">
                    <small id="helpId" class="form-text text-muted">* obligatoire</small>
                  </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="affectation">Affectation</label>
                    <input type="text"
                      class="form-control" name="affectation" id="affectation" aria-describedby="helpId" placeholder="Affectation" value="{{old('affectation', null)}}">
                    <small id="helpId" class="form-text text-muted">* obligatoire</small>
                  </div>
                  <div class="form-group">
                    <label for="diplome">Diplôme</label>
                    <input type="text"
                      class="form-control" name="diplome" id="diplome" aria-describedby="helpId" placeholder="Diplôme" value="{{old('diplome', null)}}">
                    <small id="helpId" class="form-text text-muted">* obligatoire</small>
                  </div>
                  <div class="form-group">
                    <label for="observation">Observation</label>
                      <textarea class="form-control" name="observation" id="observation" aria-describedby="helpId" placeholder="Observation" rows="2">{{old('observation', null)}}</textarea>
                    <small id="helpId" class="form-text text-muted"></small>
                  </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
        </div>


        
        
    </form>
@endsection