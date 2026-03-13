@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

  <h1>Nos animaux</h1>

  <div class="animal-grid"> 
    @foreach($animals as $animal)
      <x-animal-card :animal="$animal"/>
    @endforeach
  </div>

@endsection