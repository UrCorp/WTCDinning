@extends('site.templates.main')

@section('body-content')

<div style="width:100%; height:100%; position:absolute; top:0px; left:0px;">
<!-- Agregar ID de tu tienda -->
  <iframe src="https://www.kichink.com/stores/id/14550" width="100%" height="100%" frameborder="0">
      <div style="width:300px; margin:40% auto; font-size:20px;">
          Tu navegador no permite mostrar la tienda en esta ventana. 
          <!-- Agregar ID de tienda -->
          <a href="https://www.kichink.com/stores/id/14550">
              Haz clic para abrir a en una nueva ventana.
          </a>
      </div>
  </iframe>
</div>

@endsection
