@extends('welcome')

@section('contenu')


   <form action="{{route('Affectation.store')}}" method="post">
    @csrf
    @method('post')
    <div class="container border">
    <div class="mb-3">
      <label for="setting-input-3" class="form-label"><h2>Personnel</h2></label>
      <select name="employé_nom" id="employé_id" class="form-control">
        <option value=""></option>
        @foreach($personnels as $personnel)
        <option value="{{$personnel->id}}">{{$personnel->nom}}</option>
        @endforeach
      </select>
      <div class="mb-3">
      <label for="setting-input-3" class="form-label"><h2>Poste</h2></label>
      <select name="poste_nom" id="poste_nom" class="form-control">
        <option value=""></option>
        @foreach($postes as $poste)
        <option value="{{$poste->id}}">{{$poste->nom}}</option>
        @endforeach
      </select>
    
      <div class="row">
       <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-primary me-1 mb-1">Soumettre</button>
              <button type="reset" class="btn btn-light-secondary me-1 mb-1">Annuler</button>
        </div>
     </div>
    </div>

  

@endsection()