@extends('welcome')

@section('contenu')


   <form action="{{route('Poste.update',['id'=>$poste->id])}}" method="post">
    @csrf
    @method("post")
    <div class="container border">
    <div class="mb-3">
      <label for="setting-input-3" class="form-label"><h2>Service</h2></label>
      <select name="service_id" id="service_id" class="form-control">
        <option value=""></option>
        @foreach($service as $service)
        @if($poste->service_id == $service->id)
        <option selected value="{{$service->id}}">{{$service->nom}}</option>
        @endif
        <option value="{{$service->id}}">{{$service->nom}}</option>
        @endforeach
      </select>

    <div class="mb-3">
      <h2>Nom Du Poste</h2>
      <input type="text" name="nom" id="nom" value="{{$poste->nom}}" class="form-control" placeholder="Entrez le Poste" aria-describedby="helpId" required>
    </div>
    <div class="row">
       <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-primary me-1 mb-1">Soumettre</button>
              <button type="reset" class="btn btn-light-secondary me-1 mb-1">Effacer</button>
        </div>
     </div>
    
     </div>
    

  

@endsection()