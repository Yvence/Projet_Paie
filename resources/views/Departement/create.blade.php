@extends('welcome')

@section('contenu')


   <form action="{{route('Departement.store')}}" method="post">
    @csrf
    @method('post')
    <div class="container border">

    <div class="mb-3">
      <h2>Ajouter une Fonction</h2>
      <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez la fonction" aria-describedby="helpId" required>
    </div>
    

    <center><button class="btn btn-primary" type="submit" id="valider">Envoyer</button>
     <button class="btn btn-secondary" type="reset" id="Effacer">Effacer</button>
  </center>
     
    </div>

  

@endsection()