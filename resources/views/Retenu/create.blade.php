@extends('welcome')

@section('contenu')
 <form action="{{route('Retenu.store')}}" method="post">
  @csrf
  @method('post')
  
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Retenues</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" data-parsley-validate>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mandatory">
                                            <label for="nom" class="form-label">Nom</label>
                                            <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom"  data-parsley-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                    <div class="form-group">
                                            <label for="type_retenu" class="form-label" placeholder="Selectionner un type">Type de Retenue</label>
                                            <select class="form-control" id="type_retenu" name="type_retenu"  >
                                                        <option value="obligatoire" >Obligatoire</option>
                                                        <option value="Autres Retenues" >Autres Retenues</option>
                                            </select>
                                        </div>
                    
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="prenom" class="form-label">Valeur</label>
                                            <input type="number" name="valeur" id="valeur" class="form-control" placeholder="Valeur de l'avantage" >
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