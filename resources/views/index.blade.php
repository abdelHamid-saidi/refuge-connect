@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

  <h2>Nos animaux</h2>

  <div class="animal-grid"> 
    @foreach($animals as $animal)
      <x-animal-card :animal="$animal"/>
    @endforeach
  </div>

@endsection