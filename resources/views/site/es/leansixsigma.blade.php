@extends('site.es.templates.main')

@section('body-content')

<!-- Portada -->
<div class="wrapper" style="margin-top: -30px">
  <div id="index-banner" class="parallax-container valign-wrapper w3-display-container" style="height: 550px;">
    <img src="{{ asset('img/certification/trans-portada.png') }}" class="w3-display-middle" style="height: 550px; width: 100%">
    <img src="{{ asset('img/lean6sigma/lean-trans.png') }}" class="w3-display-left hide-on-small-only" style="height: 550px; width: 65%">
    <img src="{{ asset('img/lean6sigma/lean-trans.png') }}" class="w3-display-left hide-on-med-and-up" style="height: 550px; width: 100%">
    <div class="parallax valign-wrapper">
      <img src="{{ asset('img/lean6sigma/lean.jpg') }}" alt="">
    </div>
    <div class="w3-display-right hide-on-small-only" style="margin: -90px 200px 0 0;">
      <a href="#" class="fa fa-facebook socialnav"></a>
      <a href="#" class="fa fa-instagram socialnav" style="margin: 10px"></a>
      <a href="#" class="fa fa-twitter socialnav"></a>
    </div>
    <div class="caption left-align hide-on-small-only" style="z-index: 100; padding-left: 5%; width: 40%">
        <h3 class="light grey-text text-lighten-3"><b>LEAN SIX SIGMA</b></h3>
        <p class="w3-justify">
          Mejore el desempeño operacional aprovechando diversas herramientas para identificar y eliminar defectos. Nuestra formación tiene aplicaciones
          directas y tangibles en casi todos los procesos de fabricación.
        </p>
        <a class="waves-effect waves-light white w3-btn w3-padding-16" href="#modal1" style="color: #f7984d">
          RESERVA AHORA
        </a>
        <a class="waves-effect waves-light white w3-btn w3-padding-16" href="http://54.186.143.105" style="color: #f7984d">
          WORKSHOPS
        </a>
      </div>
      <!-- Responsive -->
      <div class="caption center-align hide-on-med-and-up" style="z-index: 100; padding: 4%; ">
        <h3 class="light grey-text text-lighten-3"><b>LEAN SIX SIGMA</b></h3>
        <p class="w3-justify">
          Mejore el desempeño operacional aprovechando diversas herramientas para identificar y eliminar defectos. Nuestra formación tiene aplicaciones
          directas y tangibles en casi todos los procesos de fabricación.
        </p>
        <a class="waves-effect waves-light white w3-btn w3-padding-16" href="#modal1" style="color: #f7984d">
          RESRVA AHORA
        </a>
        <a class="waves-effect waves-light white w3-btn w3-padding-16" href="http://54.186.143.105" style="color: #f7984d">
          WORKSHOPS
        </a>
      </div>
      <!-- End Responsive -->
  </div>
</div>
<!-- End Portada -->



@endsection
