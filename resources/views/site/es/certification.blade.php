@extends('site.es.templates.main')

@section('body-content')

<!-- Portada -->
<div class="wrapper" style="margin-top: -30px">
  <div id="index-banner" class="parallax-container valign-wrapper w3-display-container" style="height: 550px;">
    <img src="{{ asset('img/certification/trans-portada.png') }}" class="w3-display-middle" style="height: 550px; width: 100%">
    <img src="{{ asset('img/certification/certification-trans.png') }}" class="w3-display-right hide-on-small-only" style="height: 550px; width: 65%">
    <img src="{{ asset('img/certification/certification-trans.png') }}" class="w3-display-right hide-on-med-and-up" style="height: 550px; width: 100%">
    <div class="parallax valign-wrapper">
      <img src="{{ asset('img/certification/certification.jpg') }}" alt="">
    </div>
    <div class="w3-display-left hide-on-small-only" style="margin: -90px 0 0 100px;">
      <a href="#" class="fa fa-facebook socialnav"></a>
      <a href="#" class="fa fa-instagram socialnav" style="margin: 10px"></a>
      <a href="#" class="fa fa-twitter socialnav"></a>
    </div>
      <div class="caption left-align hide-on-small-only" style="z-index: 100; padding-left: 50%; ">
        <h3 class="light grey-text text-lighten-3"><b>CERTIFICACIÓN CORPORATIVA WTC QRO</b></h3>
        <p>
          Potencializa la productividad de tu organización trascendiendo a través del valor humano, generando solvencia y diseñando nuevas estrategias de innovación.
        </p>
        <a class="waves-effect waves-light white w3-btn w3-padding-16" href="#mCertification" style="color: #f7984d">
          AGENDA AHORA
        </a>
      </div>
      <!-- Responsive -->
      <div class="caption center-align hide-on-med-and-up" style="z-index: 100; padding: 4%; ">
        <h3 class="light grey-text text-lighten-3"><b>CERTIFICACIÓN CORPORATIVA WTC QRO</b></h3>
        <p class="w3-justify">
          Potencializa la productividad de tu organización trascendiendo a través del valor humano, generando solvencia y diseñando nuevas estrategias de innovación.
        </p>
        <a class="waves-effect waves-light white w3-btn w3-padding-16" href="#modal1" style="color: #f7984d">
          AGENDA AHORA
        </a>
      </div>
      <!-- End Responsive -->
  </div>
</div>
<!-- End Portada -->

<div class="container" style="z-index: -5; margin-top: 100px">
  <div class="w3-display-container" style="z-index: -5">
    <img src="{{ asset('img/certification/classroom.png') }}" style="width: 100%; z-index: -5">
    <div class="w3-display-topright w3-white hide-on-med-and-down" style="width: 50%; margin-right: 5%; margin-top: 25%">
      <div class="w3-card-4 w3-padding-32 w3-padding-large">
        <div class="w3-container" style="border-left: 12px solid #8cbde5;">
          <header>
            <h5 class="font-gray">TRASCENDENCIA</h5>
          </header>
          <p class="w3-justify letra-chica">
            Analizará maneras en que puede ser más productivo y profesional en sus relaciones de trabajo. Desarrollará habilidades para comunicar ideas,
            generando un impacto que trascienda en los demás, basándonos en un liderazgo congruente.
          </p>
        </div>
        <div class="w3-container" style="border-left: 12px solid #f9f15b;">
        <header>
          <h5 class="font-gray">SOLVENCIA</h5>
        </header>
          <p class="w3-justify letra-chica">
            Desarrollará habilidades y procesos necesarios para tener éxito a la hora de negociar y vender. Identificará la importancia de las actitudes que
            mostramos frente a nuestros clientes y las mejores prácticas para generar nuevas relaciones comerciales.
          </p>
        </div>
        <div class="w3-container" style="border-left: 12px solid #434444;">
          <header>
            <h5 class="font-gray">INNOVACIÓN</h5>
          </header>
          <p class="w3-justify letra-chica">
            Facilitaremos procesos de innovación que transformen las posibilidades en soluciones. Transformaremos el conocimiento y la percepción que tiene la
            gente sobre su organización, productos y servicios en estrategias de negocio.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="w3-container hide-on-med-and-down" style="width: 40%; margin-top: 20px">
    <header>
      <h5 class="font-gray">CERTIFICACIÓN CORPORATIVA WTC QRO</h5>
    </header>
    <p class="w3-justify font-gray " style="line-height: 1.5;">
      Contribuimos a que las personas encuentren su potencial a través de programas de capacitación y consultoría que desarrollen habilidades por medio de
      herramientas y procesos, impulsando el talento humano e impactando positivamente en productividad y en la economía.
    </p>
    <a class="waves-effect waves-light white-text w3-btn w3-padding-16" href="#modal1" style="background-color: #f7984d">
      AGENDAR
    </a>
  </div>
  <div class="w3-container hide-on-large-only" style="width: 100%; margin-top: 20px">
    <header>
      <h5 class="font-gray">CERTIFICACIÓN CORPORATIVA WTC QRO</h5>
    </header>
    <p class="w3-justify font-gray " style="line-height: 1.5;">
      Contribuimos a que las personas encuentren su potencial a través de programas de capacitación y consultoría que desarrollen habilidades por medio de
      herramientas y procesos, impulsando el talento humano e impactando positivamente en productividad y en la economía.
    </p>
    <a class="waves-effect waves-light white-text w3-btn w3-padding-16" href="#modal1" style="background-color: #f7984d">
      AGENDAR
    </a>
  </div>
</div>
<div class="w3-container hide-on-med-and-down" style="height: 200px">
</div>
<!-- Start [Card Responsive] -->
<div class="w3-white hide-on-large-only" style="margin: 5%">
  <div class="w3-card-4 w3-padding-32 w3-padding-large">
    <div class="w3-container" style="border-left: 12px solid #8cbde5;">
      <div class="w3-container">
        <header>
          <h5 class="font-gray">TRASCENDENCIA</h5>
        </header>
        <p class="w3-justify letra-chica">
          Analizará maneras en que puede ser más productivo y profesional en sus relaciones de trabajo. Desarrollará habilidades para comunicar ideas,
          generando un impacto que trascienda en los demás, basándonos en un liderazgo congruente.
        </p>
      </div>
    </div>
    <div class="w3-container" style="border-left: 12px solid #f9f15b;">
      <div class="w3-container">
      <header>
        <h5 class="font-gray">SOLVENCIA</h5>
      </header>
        <p class="w3-justify letra-chica">
          Desarrollará habilidades y procesos necesarios para tener éxito a la hora de negociar y vender. Identificará la importancia de las actitudes que
          mostramos frente a nuestros clientes y las mejores prácticas para generar nuevas relaciones comerciales.
        </p>
      </div>
    </div>
    <div class="w3-container" style="border-left: 12px solid #434444;">
      <div class="w3-container">
        <header>
          <h5 class="font-gray">INNOVACIÓN</h5>
        </header>
        <p class="w3-justify letra-chica">
          Facilitaremos procesos de innovación que transformen las posibilidades en soluciones. Transformaremos el conocimiento y la percepción que tiene la
          gente sobre su organización, productos y servicios en estrategias de negocio.
        </p>
      </div>
    </div>
  </div>
</div>
<!-- End [Card responsive] -->
<!-- [Certification Modal] -->
  <div id="mCertification" class="modal modal-fixed-footer">
    {!! Form::open(['route' => 'site.contact.infocertification', 'method' => 'POST']) !!}
    <div class="modal-content">
      <div class="section">
        <img src="{{ asset('img/wtc-w.png') }}" class="" style="width: 10%; height: 10%">
        <button class="modal-close right btn-flat">X</button>
        <h5 class="center">Certification</h5>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('certification[name]', 'Nombre') !!}
          {!! Form::text('certification[name]',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 m3 offset-m3">
          {!! Form::label('certification[email]', 'Mail') !!}
          {!! Form::email('certification[email]',null,['class' => 'form-control validate', 'required']) !!}
          </div>
          <div class="input-field col s12 m3">
          {!! Form::label('certification[phone]', 'Teléfono') !!}
          {!! Form::text('certification[phone]',null,['class' => 'validate',  'required']) !!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('certification[enterprise]', 'Empresa') !!}
          {!! Form::text('certification[enterprise]',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
        <div class="w3-center">
        {!! Form::submit('Send',['class' => 'btn blue darken-1 center', 'style' => '']) !!}
        </div>
    </div>
    {!! Form::close() !!}
  </div>
<!-- End [Certification Modal] -->
@endsection
