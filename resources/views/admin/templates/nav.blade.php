<!--nav style="background: white; position: fixed; z-index: 4;" role="navigation"-->
<ul id="Restaurantes" class="dropdown-content">
      <li><a href="{{ route('restaurants.index') }}">Lista</a></li>
      <li><a href="{{ route('restaurants.create') }}">Crear</a></li>
</ul>

<ul id="Categorias" class="dropdown-content">
      <li><a href="{{ route('categories.index') }}">Lista</a></li>
      <li><a href="{{ route('categories.create') }}">Crear</a></li>
</ul>

<ul id="Etiquetas" class="dropdown-content">
      <li><a href="{{ route('tags.index') }}">Lista</a></li>
      <li><a href="{{ route('tags.create') }}">Crear</a></li>
</ul>

<nav style="background: white; position: fixed;" role="navigation">
  <div class="nav-wrapper container">
    <a id="logo-container" href="#" class="brand-logo">WTC</a>
    <ul class="right hide-on-med-and-down">
      <li><a class="dropdown-button" data-activates="Restaurantes" href="{{ route('restaurants.index') }}">Restaurantes<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-button" data-activates="Categorias" href="{{ route('categories.index') }}">Categorías<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-button" data-activates="Etiquetas" href="{{ route('tags.index') }}">Etiquetas<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>

    <ul id="nav-mobile" class="side-nav">
      <li><a href="{{ route('restaurants.index') }}">Restaurantes</a></li>
      <li><a href="{{ route('restaurants.create') }}">Nuevo</a></li>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons red-text">menu</i></a>
  </div>
</nav>