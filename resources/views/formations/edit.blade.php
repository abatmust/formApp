@extends('layouts.app')

@section('content')
<h1>modifier une formation</h1>
<form action="{{ route('formations.update', ['formation' => $formation->id]) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="intitule">Intitulé</label>
            <textarea class="form-control" name="intitule" id="intitule" aria-describedby="helpId" placeholder="Intitulé" rows="2">{{old('intitule', $formation->intitule)}}</textarea>
                  <small id="helpId" class="form-text text-muted">* obligatoire</small>
              </div>
              <div class="form-group">
                <label for="nom">Début</label>
                <input type="date"
                  class="form-control" name="debut" id="debut" aria-describedby="helpId" placeholder="Début" value="{{old('debut', $formation->debut)}}">
                <small id="helpId" class="form-text text-muted">* obligatoire</small>
              </div>
              
        </div>
        <div class="col">
            
              <div class="form-group">
                <label for="observation">Observation</label>
                  <textarea class="form-control" name="observation" id="observation" aria-describedby="helpId" placeholder="Observation" rows="2">{{old('observation', $formation->observation)}}</textarea>
                <small id="helpId" class="form-text text-muted">*</small>
              </div>
              <div class="form-group">
                <label for="fin">Fin</label>
                <input type="date"
                  class="form-control" name="fin" id="fin" aria-describedby="helpId" placeholder="Fin" value = "{{old('intitule', $formation->fin)}}">
                <small id="helpId" class="form-text text-muted">* obligatoire</small>
              </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Modifier</button>
    </div>


    
    
</form>
@endsection