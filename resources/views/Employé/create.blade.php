@extends('welcome')

@section('contenu')


   <form action="{{route('Employé.store')}}" method="post">
    @csrf
    @method('post')
    <div class="container border">
    <div class="mb-3">
      <label for="setting-input-3" class="form-label"><h2>Departement</h2></label>
      <select name="departement_id" id="departement_id" class="form-control">
        <option value=""></option>
        @foreach($departements as $departement)
        <option value="{{$departement->id}}">{{$departement->nom}}</option>
        @endforeach
      </select>
    <div class="mb-3">
      <h2>Nom</h2>
      <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez votre nom" aria-describedby="helpId" required>
    </div>
    <div class="mb-3">
      <h2>Prenom</h2>
      <input type="text" name="prenom" id="prenom" class="form-control" placeholder="prenom" aria-describedby="helpId" required>
    </div>
    <div>
    <select name="sexe" id="sexe" placeholder="Votre sexe">
        <option value="masculin">Masculin</option>
        <option value="masculin">Feminin</option>
    </select>
    </div>
    
    
    <div class="mb-3">
      <h2>Date</marquee>
      <input type="date" name="date" id="date" class="form-control" placeholder="Votre date" aria-describedby="helpId">
    </div>

    <div>

    <center><button class="btn btn-primary" type="submit" id="valider">Envoyer</button>
     <button class="btn btn-secondary" type="reset" id="Effacer">Effacer</button>
  </center>
     
    </div>

  

@endsection()