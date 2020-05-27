@extends('layouts.app')

@section('content')
<h1>ajouter une formation</h1>
<form action="{{ route('formations.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="intitule">Intitulé</label>
                  <textarea class="form-control" name="intitule" id="intitule" aria-describedby="helpId" placeholder="Intitulé" rows="2"></textarea>
                  <small id="helpId" class="form-text text-muted">* obligatoire</small>
              </div>
              <div class="form-group">
                <label for="nom">Début</label>
                <input type="date"
                  class="form-control" name="debut" id="debut" aria-describedby="helpId" placeholder="Début">
                <small id="helpId" class="form-text text-muted">* obligatoire</small>
              </div>
              
        </div>
        <div class="col">
            
              <div class="form-group">
                <label for="observation">Observation</label>
                  <textarea class="form-control" name="observation" id="observation" aria-describedby="helpId" placeholder="Observation" rows="2"></textarea>
                <small id="helpId" class="form-text text-muted">*</small>
              </div>
              <div class="form-group">
                <label for="fin">Fin</label>
                <input type="date"
                  class="form-control" name="fin" id="fin" aria-describedby="helpId" placeholder="Fin">
                <small id="helpId" class="form-text text-muted">* obligatoire</small>
              </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
    </div>


    
    
</form>
@endsection