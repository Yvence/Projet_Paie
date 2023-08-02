@extends('welcome')

@section('contenu')
<table class="table">
  <thead class="table-dark">
    <tr>
    <th>ID</th>
    <th>Date_Debut</th>
    <th>Date_Fin</th>
    <th>Statut</th>
    <th>Salaire_Base</th>
    <th>Actions</th>
    <th><a href="{{route('Contrat.create')}}" class="btn btn-primary">Ajouter</a></th>
   </tr>
</thead>
<tbody>
    @foreach($contrats as $contrat)
    <tr>
      <td>{{$contrat->id}}</td>
      <td>{{$contrat->date_debut}}</td>
      <td>{{$contrat->date_fin}}</td>
      <td>{{$contrat->statut}}</td>
      <td>{{$contrat->salaire_base}}</td>
      

      <td><a href="{{route('Contrat.edit',['contrat'=>$contrat])}}" class="btn btn-success">Modifier</a></td>
       <td><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    @endforeach
</tbody>
</table>




@endsection