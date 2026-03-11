@extends('layouts.app')

@section('content')
<h2>{{ $animal->name }}</h2>

<div class="show-animal">
  <img src="/images/{{ $animal->photo }}" alt="{{ $animal->name }}" width="300">

  <div class="show-animal-cont">
    <p>Espèce : {{ $animal->species }}</p>
    <p>Âge : {{ $animal->age }} ans</p>
    <p>Description : {{ $animal->description }}</p>
  </div>
</div>

@endsection