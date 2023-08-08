@extends('welcome')

@section('contenu')


   <form action="{{route('Fiche.store')}}" method="post">
    @csrf
    @method('post')
    <div class="container border">
    <div class="mb-3">
      <label for="setting-input-3" class="form-label"><h2>Contrat</h2></label>
      <select name="contrat_id" id="contrat_id" class="form-control">
        <option value=""></option>
        @foreach($contrats as $contrat)
        <option value="{{$contrat->id}}">{{$contrat->numero}}</option>
        @endforeach
      </select>

      <div class="col-md-6 col-12">
        <div class="form-group">
             <label for="prenom" class="form-label"><h2>Code</h2></label>
                 <input type="number" id="code" class="form-control" placeholder="Code de la Fiche" name="code">
        </div>
     </div>
     <div class="col-md-6 col-12">
        <div class="form-group">
             <label for="salbrute" class="form-label"><h2>Salaire Brute</h2></label>
                 <input type="number" id="salbrute" class="form-control" placeholder="Le salaire Brute" name="salbrute">
        </div>
     </div>
     <div class="col-md-6 col-12">
        <div class="form-group">
             <label for="salNet" class="form-label"><h2>Salaire Net</h2></label>
                 <input type="number" id="salNet" class="form-control" placeholder="Le Salaire Net" name="salNet">
        </div>
     </div>
    <div class="row">
       <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-primary me-1 mb-1">Soumettre</button>
              <button type="reset" class="btn btn-light-secondary me-1 mb-1">Effacer</button>
        </div>
     </div>
    
     </div>
    

  

@endsection()