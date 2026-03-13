<header>
  <!-- Logo -->
  <div class="logo">
    <a href="{{ route('index') }}">
      <img src=" {{ asset('/logo.png') }}" alt="RefugeConnect">
    </a>
  </div>

  <!-- Boutons -->
  <div class="buttons">
    <a href="{{ route('index') }}">Accueil</a>
    <a href="{{ route('animal.add') }}">Ajouter un animal</a>
  </div>
</header>