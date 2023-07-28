@extends('welcome');

@section('contenu')


   <form action="" method="post">
    @csrf
    <div class="container border">
    <div class="mb-3">
      <label for="nom" class="form-label"><marquee behavior="" direction="right"><h2>Nom</h2></marquee></label>
      <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez votre nom" aria-describedby="helpId" required>
    </div>
    <div class="mb-3">
      <label for="prenom" class="form-label"><marquee behavior="" direction="right"><h2>Prenom</h2></marquee></label>
      <input type="text" name="prenom" id="prenom" class="form-control" placeholder="prenom" aria-describedby="helpId" required>
    </div>
    <div>
    <select name="sexe" id="sexe" placeholder="Votre sexe">
        <option value="masculin">Masculin</option>
        <option value="masculin">Feminin</option>
    </select>
    </div>
    <div class="mb-3">
      <label for="" class="form-label"><marquee behavior="" direction="right"><h2> Date </h2></marquee></label>
      <input type="date" name="date" id="date" class="form-control" placeholder="Votre date" aria-describedby="helpId">
    </div>

    

    <center><button class="btn btn-primary" type="submit" id="valider">Envoyer</button></center>
    </div>

  

@endsection();