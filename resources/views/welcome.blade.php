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
      <td>{{ $train->company }}</td>
      <td>{{ $train->departure_date }}</td>
      <td>{{ $train->departure_station }}</td>
      <td>{{ $train->arrival_station }}</td>
      <td>{{ $train->departure_time }}</td>
      <td>{{ $train->arrival_time }}</td>
      <td>{{ $train->train_code}}</td>
      <td>{{ $train->carriages }}</td>
    </tr>
@endforeach

  </tbody>
</table>

</div>

@endsection