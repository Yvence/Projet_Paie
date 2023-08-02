@extends('welcome')

@section('contenu')
<table class="table">
  <thead class="table-dark">
    <tr>
    <th>ID</th>
    <th>Date de la Demande</th>
    <th>Statut</th>
    <th>Actions</th>
    <th><a href="{{route('Demande.create')}}" class="btn btn-primary">Ajouter</a></th>
   </tr>
</thead>
<tbody>
    @foreach($demandes as $demande)
    <tr>
      <td>{{$demande->id}}</td>
      <td>{{$demande->date_demande}}</td>
      <td>{{$demande->statut}}</td>
      

      <td><a href="{{route('Demande.edit',['demande'=>$demande])}}" class="btn btn-success">Modifier</a></td>
       <td><a href="" class="btn btn-danger">Supprimer</a></td>
    </tr>
    @endforeach
</tbody>
</table>




@endsection