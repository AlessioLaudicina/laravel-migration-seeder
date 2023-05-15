@extends('layouts.app')

@section ('content')
@foreach ($trains as $train)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$train.azienda}}</h5>
    <p class="card-text">{{$train.stazione_partenza}}</p>
    <p class="card-text">{{$train.stazione_arrivo}}</p>
    <p class="card-text">{{$train.orario_partenza}}</p>
    <p class="card-text">{{$train.orario_arrivo}}</p>
  </div>
</div>

@endforeach
@endsection