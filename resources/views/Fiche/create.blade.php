@extends('welcome')

@section('contenu')


   <form action="{{route('Fiche.store')}}" method="post">
    @csrf
    @method('post')
    <div class="container border">
    <div class="col-md-6 col-12">
      <label for="setting-input-3" class="form-label">Employé</label>
      <select name="contrat_id" id="contrat_id" class="form-control">
        <option value=""></option>
        @foreach($contrat as $contrat)
        <option value="{{$contrat->id}}">{{dump($contrat)}}</option>
        @endforeach
      </select>

      <div class="col-md-6 col-12">
        <div class="form-group">
             <label for="prenom" class="form-label">Code Fiche</label>
                 <input type="number" id="code" class="form-control" placeholder="Code de la Fiche" name="code">
        </div>
     </div>
     <div class="col-md-6 col-12">
        <div class="form-group">
             <label for="salbrute" class="form-label">Salaire Brute</label>
                 <input type="number" id="salbrute" class="form-control" placeholder="Le salaire Brute" name="salbrute">
        </div>
     </div>
     <div class="col-md-6 col-12">
        <div class="form-group">
             <label for="salNet" class="form-label">Salaire Net</label>
                 <input type="number" id="salNet" class="form-control" placeholder="Le Salaire Net" name="salNet">
        </div>
     </div>
     <div class="col-md-6 mb-4">
                                       
                                       <div class="form-group">
                                           <label for="avantage" class="form-label">Avantage</label>
                                           <select class="choices form-select multiple-remove" name="avantage[]" placeholder="Selectionnez un ou plusieurs avantages" multiple="multiple">
                                                   @foreach($avantage as $avantage)
                                                       <option value="{{ $avantage->id }}" >{{ $avantage->nom }}</option>
                                                   @endforeach
                                           </select>
                                       </div>
                                   </div>
                                   <div class="col-md-6 mb-4">
                                       
                                       <div class="form-group">
                                           <label for="poste" class="form-label">Retenue</label>
                                           <select class="choices form-select multiple-remove" name="retenu[]" placeholder="Selectionnez une ou plusieurs retenues" multiple="multiple">
                                                   @foreach($retenu as $retenu)
                                                       <option value="{{ $retenu->id }}" >{{ $retenu->nom }}</option>
                                                   @endforeach
                                           </select>
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