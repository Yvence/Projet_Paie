@extends('welcome')

@section('contenu')
<table class="table">
  <thead class="table-dark">
    <tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Telephone</th>
    <th>Email</th>
    <th>Numéro Matricule</th>
    
    <th>Actions</th>
    <th><a href="{{route('Employé.create')}}" class="btn btn-primary">Ajouter</a></th>
   </tr>
</thead>
<tbody>
    @foreach($employés as $employé)
    <tr>
      <td>{{$employé->id}}</td>
      <td>{{$employé->nom}}</td>
      <td>{{$employé->prenom}}</td>
      <td>{{$employé->telephone}}</td>
      <td>{{$employé->email}}</td>
      <td>{{$employé->matricule}}</td>
     

      <td><a href="{{route('Employé.edit',['employé'=>$employé])}}" class="btn btn-success">Modifier</a></td>
       <td><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    @endforeach
</tbody>
</table>




@endsection