@extends('welcome')

@section('contenu')


   <form action="{{route('Service.store')}}" method="post">
    @csrf
    @method('post')
    <div class="container border">
    <div class="mb-3">
      <label for="setting-input-3" class="form-label"><h2>Département</h2></label>
      <select name="departement_id" id="departement_id" class="form-control">
        <option value=""></option>
        @foreach($departements as $departement)
        <option value="{{$departement->id}}">{{$departement->nom}}</option>
        @endforeach
      </select>

    <div class="mb-3">
      <h2>Nom Du Service</h2>
      <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez le Service" aria-describedby="helpId" required>
    </div>
    <div class="row">
       <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-primary me-1 mb-1">Soumettre</button>
              <button type="reset" class="btn btn-light-secondary me-1 mb-1">Effacer</button>
        </div>
     </div>
    
     </div>
    

  

@endsection()