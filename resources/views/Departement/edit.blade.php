@extends('welcome')

@section('contenu')


   <form action="{{route('Departement.miseajour',['id'=>$departement->id])}}" method="post">
    @csrf
    @method("post")
    <div class="container border">

    <div class="col-md-6 col-12">
             <div class="form-group mandatory">
                <label for="nom" class="form-label">Entrez un Departement</label>
                  <input type="text" id="nom" value="{{$departement->nom}}" class="form-control" placeholder="Nom" name="nom" data-parsley-required="true">
            </div>
    </div>
    <div class="row">
       <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-primary me-1 mb-1">Soumettre</button>
              <button type="reset" class="btn btn-light-secondary me-1 mb-1">Annuler</button>
        </div>
     </div>
    
     </div>
    

  

@endsection()