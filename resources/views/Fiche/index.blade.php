@extends('welcome')

@section('contenu')
<table class="table">
  <thead class="table-dark">
    <tr>
    <th>Identifiant du Contrat</th>
    <th>Code de la Fiche</th>
    <th>Salaire Brute</th>
    <th>Salaire Net</th>
    <th>Actions</th>
    <th><a href="{{route('Fiche.create')}}" class="btn btn-primary">Ajouter</a></th>
   </tr>
</thead>
<tbody>
    @foreach($fiches as $fiche)
    <tr>
      <td>{{$fiche->contrat_id}}</td>
      <td>{{$fiche->code}}</td>
      <td>{{$fiche->salbrute}}</td>
      <td>{{$fiche->salNet}}</td>
      

      <td><a href="{{route('Fiche.edit',['fiche'=>$fiche])}}" class="btn btn-success">Modifier</a></td>
       <td><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    @endforeach
</tbody>
</table>




@endsection