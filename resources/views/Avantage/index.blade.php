@extends('welcome')

@section('contenu')
<table class="table">
  <thead class="table-dark">
    <tr>
    <th>ID</th>
    <th>Nom de l'Avantage</th>
    <th>Valaur de l'Avantage</th>
    <th>Actions</th>
    <th><a href="{{route('Avantage.create')}}" class="btn btn-primary">Ajouter</a></th>
   </tr>
</thead>
<tbody>
    @foreach($avantages as $avantage)
    <tr>
      <td>{{$avantage->id}}</td>
      <td>{{$avantage->nom}}</td>
      <td>{{$avantage->valeur}}</td>
      

      <td><a href="{{route('Avantage.edit',$avantage->id)}}" class="btn btn-success">Modifier</a></td>
       <td><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    @endforeach
</tbody>
</table>




@endsection