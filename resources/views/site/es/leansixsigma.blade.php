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
    <div class="caption left-align hide-on-small-only" style="z-index: 100; padding-left: 5%; width: 40%">
        <h3 class="light grey-text text-lighten-3"><b>LEAN SIX SIGMA</b></h3>
        <p class="w3-justifylean6sigma">
          Mejore el desempeño operacional aprovechando diversas herramientas para identificar y eliminar defectos. Nuestra formación tiene aplicaciones
          directas y tangibles en casi todos los procesos de fabricación.
        </p>
        <a class="waves-effect waves-light white w3-btn w3-padding-16" href="#modal1" style="color: #f7984d">
          RSERVA AHORA
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
      </div>
      <!-- End Responsive -->
  </div>
</div>
<!-- End Portada -->

<div class="container" style="z-index: -5; margin-top: 100px">
  <div class="w3-display-container" style="z-index: -5">
    <img src="{{ asset('img/lean6sigma/table.jpg') }}" style="width: 100%; z-index: -5">
    <div class="w3-display-bottomright w3-white hide-on-med-and-down" style="width: 50%; margin-right: 5%; margin-bottom: -5%">
      <div class="w3-card-4 w3-padding-32 w3-padding-large">
        <div class="w3-container">
          <header>
            <h5 class="font-gray">Lean Six Sigma</h5>
          </header>
          <p class="w3-justify letra-chica">
            Lean Six Sigma Institute ofrece una amplia gama de servicios de capacitación, consultoría y evaluación para satisfacer las demandas y desafíos
            que las organizaciones enfrentan, donde los procesos y el flujo son elementos esenciales para reducir costos y mantener una ventaja competitiva.
          </p>
          <a class="waves-effect waves-light white-text w3-btn w3-padding-16" href="#modal1" style="background-color: #f7984d">
            AGENDAR
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container hide-on-small-only" style="margin-top: 5%; margin-bottom: 5%">
  <div class="w3-row-padding">
    <div class="w3-col s4 w3-container">
      <div class="w3-display-container">
        <img src="{{ asset('img/lean6sigma/YB.jpg') }}" style="width: 100%">
        <div class="w3-display-middle" style="background-color: rgba(229, 211, 50, 0.8);position: absolute;width: 100%;height: 100%;"></div>
        <h5 class="w3-display-topleft" style="color: rgba(255, 255, 255, 0.9); font-weight:900; margin-left: 15px">Yellow Belt <br> Course </h5>
      </div>
      <p class="w3-justify font-gray letra-chica" style="position: relative;">
        La capacitación de Yellow Bet se centra en preparar a los individuos para desarrollar procesos eficientes para una entrega rápida y una calidad consistente.
      </p>
    </div>
    <div class="w3-col s4 w3-container" >
      <div class="w3-display-container">
        <img src="{{ asset('img/lean6sigma/GB.jpg') }}" style="width: 100%">
        <div class="w3-display-middle" style="background-color: rgba(171, 208, 58, 0.8);position: absolute;width: 100%;height: 100%;"></div>
        <h5 class="w3-display-topleft" style="color: rgba(255, 255, 255, 0.9); font-weight:900; margin-left: 15px">Green Belt <br> Course </h5>
      </div>
      <p class="w3-justify font-gray letra-chica">
        Son agentes de cambio entrenados en las metodologías de Lean Six Sigma, y ​​como tales, son capaces de implementar proyectos de alto impacto.
      </p>
    </div>
    <div class="w3-col s4 w3-container">
      <div class="w3-display-container">
        <img src="{{ asset('img/lean6sigma/BB.jpg') }}" style="width: 100%">
        <div class="w3-display-middle" style="background-color: rgba(0, 0, 0, 0.8);position: absolute;width: 100%;height: 100%;"></div>
        <h5 class="w3-display-topleft" style="color: rgba(255, 255, 255, 0.9); font-weight:900; margin-left: 15px">Black Belt <br> Course </h5>
      </div>
      <p class="w3-justify font-gray letra-chica">
        Black Belts son expertos en metodologías Lean Six Sigma y dedican gran parte de su tiempo a implementar mejoras en la empresa, liderando proyectos claves
        y capacitando o asesorando al personal.
      </p>
    </div>
      <div class="w3-col s4 w3-container">
        <a href="#" class="w3-btn btnlean">Ver Fechas</a>
      </div>
      <div class="w3-col s4 w3-container" >
        <a href="#" class="w3-btn btnlean">Ver Fechas</a>
      </div>
      <div class="w3-col s4 w3-container">
        <a href="#" class="w3-btn btnlean">Ver Fechas</a>
      </div>
  </div>
</div>

<div class="container hide-on-med-and-up" style="margin-top: 5%">
  <div class="w3-row-padding">
    <div class="w3-col s12 w3-container w3-section">
      <div class="w3-display-container">
        <img src="{{ asset('img/lean6sigma/YB.jpg') }}" style="width: 100%">
        <div class="w3-display-middle" style="background-color: rgba(229, 211, 50, 0.8);position: absolute;width: 100%;height: 100%;"></div>
        <h5 class="w3-display-topleft" style="color: rgba(255, 255, 255, 0.9); font-weight:900; margin-left: 15px">Yellow Belt <br> Course </h5>
      </div>
      <p class="w3-justify font-gray letra-chica" style="position: relative;">
        La capacitación de Yellow Bet se centra en preparar a los individuos para desarrollar procesos eficientes para una entrega rápida y una calidad consistente.
      </p>
      <a href="#" class="w3-btn btnlean">Ver Fechas</a>
    </div>
    <div class="w3-col s12 w3-container w3-section" >
      <div class="w3-display-container">
        <img src="{{ asset('img/lean6sigma/GB.jpg') }}" style="width: 100%">
        <div class="w3-display-middle" style="background-color: rgba(171, 208, 58, 0.8);position: absolute;width: 100%;height: 100%;"></div>
        <h5 class="w3-display-topleft" style="color: rgba(255, 255, 255, 0.9); font-weight:900; margin-left: 15px">Green Belt <br> Course </h5>
      </div>
      <p class="w3-justify font-gray letra-chica">
        Son agentes de cambio entrenados en las metodologías de Lean Six Sigma, y ​​como tales, son capaces de implementar proyectos de alto impacto.
      </p>
      <a href="#" class="w3-btn btnlean">Ver Fechas</a>
    </div>
    <div class="w3-col s12 w3-container w3-section">
      <div class="w3-display-container">
        <img src="{{ asset('img/lean6sigma/BB.jpg') }}" style="width: 100%">
        <div class="w3-display-middle" style="background-color: rgba(0, 0, 0, 0.8);position: absolute;width: 100%;height: 100%;"></div>
        <h5 class="w3-display-topleft" style="color: rgba(255, 255, 255, 0.9); font-weight:900; margin-left: 15px">Black Belt <br> Course </h5>
      </div>
      <p class="w3-justify font-gray letra-chica">
        Black Belts son expertos en metodologías Lean Six Sigma y dedican gran parte de su tiempo a implementar mejoras en la empresa, liderando proyectos claves
        y capacitando o asesorando al personal.
      </p>
      <a href="#" class="w3-btn btnlean">Ver Fechas</a>
    </div>
  </div>
</div>

@endsection
