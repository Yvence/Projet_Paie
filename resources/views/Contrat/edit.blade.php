@extends('welcome')

@section('contenu')


   <form action="" method="post">
    @csrf
    @method('post')
    <div class="container border">

    
    <div class="mb-3">
      <h2>Date Debut</marquee>
      <input type="date" name="date_debut" id="date_debut" class="form-control" placeholder="date du debut" aria-describedby="helpId">
    </div>
    <div class="mb-3">
      <h2>Date Fin</marquee>
      <input type="date" name="date_fin" id="date_fin" class="form-control" placeholder="date de la fin" aria-describedby="helpId">
    </div>
    <h2>Statut</h2>
      <input type="text" name="statut" id="statut" class="form-control" placeholder="Le statut du contrat" aria-describedby="helpId" required>
    </div
    <h2>Salaire de Base</h2>
      <input type="text" name="salaire_base" id="salaire_base" value="" class="form-control" placeholder="Le salaire de base" aria-describedby="helpId" required>
    </div

    <center><button class="btn btn-primary" type="submit" id="valider">Envoyer</button>
     <button class="btn btn-secondary" type="reset" id="Effacer">Effacer</button>
  </center>
     
    </div>

  

@endsection()