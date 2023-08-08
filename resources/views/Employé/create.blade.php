@extends('welcome')

@section('contenu')
 <form action="{{route('Employé.store')}}" method="post">
  @csrf
  @method('post')
  
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Informations Du Personnel</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" data-parsley-validate>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mandatory">
                                            <label for="nom" class="form-label">Nom</label>
                                            <input type="text" id="nom" class="form-control" placeholder="Nom" name="nom" data-parsley-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="prenom" class="form-label">Prenom</label>
                                            <input type="text" id="prenom" class="form-control" placeholder="Prenom" name="prenom">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="adresse" class="form-label">Numéro Matricule</label>
                                            <input type="number" id="matricule" class="form-control" placeholder="Numéro Matricule" name="matricule" data-parsley-restricted-city="Jakarta">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="telephone" class="form-label">Telephone</label>
                                            <input type="number" id="telephone" class="form-control" name="telephone" placeholder="Telephone">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="date_naissance" class="form-label">Date de naissance</label>
                                            <input type="date" id="date_naissance" class="form-control" name="date_naissance" placeholder="Date de Naissance">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mandatory">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" id="email" class="form-control" name="email" placeholder="Email" data-parsley-required="true">
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