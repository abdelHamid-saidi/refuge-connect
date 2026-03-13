<div class="animal-card">

    <a href="{{ route('animal.show', $animal->id) }}">
        <img src="/images/{{ $animal->photo }}" alt="{{ $animal->name }}">
    </a>

    <h2>{{ $animal->name }}</h2>

    <p>Espèce : {{ $animal->species }}</p>
    <p>Age : {{ $animal->age }} ans</p>
    <p>{{ $animal->description }}</p>

    <div class="href-cont">
        <a href="{{ route('animal.edit', $animal->id) }}">Modifier</a>
        <a href="{{ route('animal.delete', $animal->id) }}">Supprimer</a>
    </div>

</div>