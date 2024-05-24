@extends('layout.app')

@section('title', 'home')

@section('content')

<div class="container">
    <h1>Trains</h1>
    <ul>
@foreach($trains as $train)

        <li><p>{{ $train['azienda'] }}</p></li>
        <li><p>{{ $train['data_di_partenza'] }}</p></li>
        <li><p>{{ $train['stazione_di_partenza'] }}</p></li>
        <li><p>{{ $train['stazione_di_arrivo'] }}</p></li>
 @endforeach
    </ul>
</div>

@endsection