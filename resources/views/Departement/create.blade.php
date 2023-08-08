@extends('welcome')

@section('contenu')


   <form action="{{route('Departement.store')}}" method="post">
    @csrf
    @method('post')
    <div class="container border">

    <div class="mb-3">
      <h2>Ajouter Un Departement</h2>
      <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez le departement" aria-describedby="helpId" required>
    </div>
    <div class="row">
       <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-primary me-1 mb-1">Soumettre</button>
              <button type="reset" class="btn btn-light-secondary me-1 mb-1">Annuler</button>
        </div>
     </div>
    
     </div>
    

  

@endsection()