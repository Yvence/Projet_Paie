@extends('welcome')

@section('contenu')
 <form action="{{route('Contrat.store')}}" method="post">
  @csrf
  @method('post')
  
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Enregistrez Un Contrat</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" data-parsley-validate>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mandatory">
                                            <label for="nom" class="form-label">Numéro Du Contrat</label>
                                            <input type="number" id="numero" class="form-control" placeholder="Numéro" name="numero" data-parsley-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="telephone" class="form-label">Statut</label>
                                            <input type="text" id="statut" class="form-control" name="statut" placeholder="Statut du contrat">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="prenom" class="form-label">Date Du Debut</label>
                                            <input type="date" id="date_debut" class="form-control" placeholder="Date début" name="date_debut">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="adresse" class="form-label">Date De la Fin</label>
                                            <input type="date" id="date_fin" class="form-control" placeholder="Date de Fin" name="date_fin" data-parsley-restricted-city="Jakarta">
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mandatory">
                                            <label for="email" class="form-label">Salaire de Base</label>
                                            <input type="number" id="salaire_base" class="form-control" name="salaire_base" placeholder="Salaire Base" data-parsley-required="true">
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
                            <label for="setting-input-3" class="form-label">Personnel-Poste</label>
                            <select name="Pers_Post_id" id="Pers_Post_id" class="form-control">
                            <option value=""></option>
                                 @foreach($perspost as $perspost)
        
                            <option value="{{$perspost->id}}">{{dump($perspost->personnel)}}</option>
                                 @endforeach
                              </select>
                                   </div>
                                   @foreach($perspost as $perspost)
                                        {{dump($perspost->poste())}}
                                    @endforeach

                                  
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