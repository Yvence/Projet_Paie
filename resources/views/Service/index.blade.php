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
    <th>Identifiant Du Departement</th>
    <th>Nom Du Service</th>
    <th>Actions</th>
    <th><a href="{{route('Service.create')}}" class="btn btn-primary">Ajouter</a></th>
   </tr>
</thead>
<tbody>
    @foreach($services as $service)
    <tr>
      <td>{{$service->id}}</td>
      <td>{{$service->departement_id}}</td>
      <td>{{$service->nom}}</td>
      

      <td><a href="{{route('Service.edit',['id'=>$service->id])}}" class="btn btn-success">Modifier</a></td>
       <td><a href="{{route('Service.destroy',$service)}}" class="btn btn-danger">Supprimer</a></td>
    </tr>
    @endforeach
</tbody>
</table>

</div>


@endsection