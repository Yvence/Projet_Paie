@extends('welcome')

@section('contenu')


   <form action="{{route('Demande.store')}}" method="post">
    @csrf
    @method('post')
    <div class="container border">
   
    <div class="mb-3">
      <h2>Date de la demande</marquee>
      <input type="date" name="date_demande" id="date_demande" class="form-control" placeholder="La date de la demande" aria-describedby="helpId">
    </div>

    <div class="mb-3">
      <h2>Statut</h2>
      <input type="text" name="statut" id="statut" class="form-control" placeholder="Statut de la demande" aria-describedby="helpId" required>
    </div>
    <div>
    

    <center><button class="btn btn-primary" type="submit" id="valider">Envoyer</button>
     <button class="btn btn-secondary" type="reset" id="Effacer">Effacer</button>
  </center>
     
    </div>

  

@endsection()