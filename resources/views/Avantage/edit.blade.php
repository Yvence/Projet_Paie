@extends('welcome')

@section('contenu')
 <form action="{{route('Avantage.miseajour', $avantage)}}" method="post">
  @csrf
  @method("post")
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Avantages</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" data-parsley-validate>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mandatory">
                                            <label for="nom" class="form-label">Nom</label>
                                            <input type="text" id="nom" class="form-control" placeholder="Nom" name="nom" value="{{$avantage->nom}}" data-parsley-required="true">
                                        </div>
                                    </div>
                                    <input type="hidden" id="id" class="form-control"  name="id" value="{{$avantage->id}}">
                                    
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="prenom" class="form-label">Valeur</label>
                                            <input type="number" id="valeur" value="{{$avantage->valeur}}" class="form-control" placeholder="Valeur de l'avantage" name="valeur">
                                        </div>
                                    </div>
                                
                                  
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Soumettre</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Effacer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

          


  

@endsection()