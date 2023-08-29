@extends('welcome')

@section('contenu')

@if(session()->has('message'))
  <div class="alert alert-primary" role="alert">
    {{ session('message') }}
  </div>
@endif
<div>
<table class="table">
  <thead class="table-dark">
    <tr>
    <th>ID</th>
    <th>Identifiant du Personnel</th>
    <th>Identifiant Poste du Personnel</th>
    <th>Actions</th>
    <th><a href="{{route('Affectation.create')}}" class="btn btn-primary">Ajouter</a></th>
   </tr>
</thead>
<tbody>
    @foreach($affectations as $affectation)
    <tr>
      <td>{{$affectation->id}}</td>
      <td>{{$affectation->employe_nom}}</td>
      <td>{{$affectation->poste_nom}}</td>
      

      <td><a href="{{route('Affectation.edit',$affectation)}}" class="btn btn-success">Modifier</a></td>
       <td><a href="{{route('Affectation.destroy',$affectation)}}" class="btn btn-danger">Supprimer</a></td>
    </tr>
    @endforeach
</tbody>
</table>
</div>



@endsection