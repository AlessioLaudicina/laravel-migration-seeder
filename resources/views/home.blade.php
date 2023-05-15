@extends('layouts.app')

@section ('content')

@foreach ($trains as $train)
<div class="card m-2" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Compagnia: {{$train->azienda}}</h5>
    <p class="card-text">Stazione di partenza: {{$train->stazione_partenza}}</p>
    <p class="card-text">Stazione di arrivo: {{$train->stazione_arrivo}}</p>
    <p class="card-text">Orario di partenza: {{$train->orario_partenza}}</p>
    <p class="card-text">Orario di arrivo: {{$train->orario_arrivo}}</p>
  </div>
</div>

@endforeach


@endsection