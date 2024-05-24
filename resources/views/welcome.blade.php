@extends('layout.app')

@section('title', 'home')

@section('content')

<div class="container">
    <h1>Trains</h1>
    
<table class="table table-dark table-striped">
  <thead>
    <tr>
      
      <th scope="col">Azienda</th>
      <th scope="col">Data di partenza</th>
      <th scope="col">Stazione di partenza</th>
      <th scope="col">Stazione di arrivo</th>
      <th scope="col">Orario di partenza</th>
      <th scope="col">Orario di arrivo</th>
      <th scope="col">Codice Treno</th>
      <th scope="col">Numero carrozze</th>
    </tr>
  </thead>
  <tbody>
   
@foreach($trains as $train)
    <tr> 
      <td>{{ $train['azienda'] }}</td>
      <td>{{ $train['data_di_partenza'] }}</td>
      <td>{{ $train['stazione_di_partenza'] }}</td>
      <td>{{ $train['stazione_di_arrivo'] }}</td>
      <td>{{ $train['orario_di_partenza'] }}</td>
      <td>{{ $train['orario_di_arrivo'] }}</td>
      <td>{{ $train['codice_treno'] }}</td>
      <td>{{ $train['numero_carrozze'] }}</td>
    </tr>
@endforeach

  </tbody>
</table>

</div>

@endsection