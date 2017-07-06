@extends('site.templates.main')

@section('body-content')

<div class="slider w3-container-display grey lighten-3" style="margin-top: -30px">
  <ul class="slides valign-wrapper">
    <li>
      <img src="{{ asset('img/home/slider/momentum.png') }}">
      <div class="caption center-align">
        <h4 class="condensed" style="padding-top: 60px">EXPLORE OUR NEW COMPLEX</h4>
        <h6 class="light grey-text text-lighten-3">We are pleased to give you a guided visit.</h6>
        <a class="waves-effect waves-light btn-large transparent bordered" style="border: solid 1px black; border-color: white" href="#modal1" >
          VISIT NOW <i class="fa fa-chevron-right " aria-hidden="true" style="font-size: 13px"></i>
        </a>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/home/slider/softlanding.png') }}">
      <div class="caption center-align">
        <h4 class="condensed" style="padding-top: 60px">WTC QRO CERTIFICATION</h4>
        <h6 class="light grey-text text-lighten-3">Generate internacional added value to your organization.</h6>
        <a class="waves-effect waves-light btn-large transparent" style="border: solid 1px black; border-color: white" href="#modal2">
          Know How <i class="fa fa-chevron-right " aria-hidden="true" style="font-size: 13px"></i>
        </a>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/home/slider/cestos.png') }}">
      <div class="caption center-align">
        <h4 class="condensed ligth" style="padding-top: 60px">MEXICAN CRAFTS</h4>
        <h6 class="light grey-text text-lighten-3">Acquire your favorite product from our exclusive Mexican hand crafting store.</h6>
        <a class="waves-effect waves-light btn-large transparent" style="border: solid 1px black; border-color: white" href="https://www.kichink.com/stores/kanpai">
          <i class="material-icons right">shop</i>
          Go Shopping
        </a>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/home/slider/zocalo.png') }}">
      <div class="caption center-align">
        <h4 class="condensed ligth" style="padding-top: 60px">SOFTLANDING</h4>
        <h6 class="light grey-text text-lighten-3">Need guidance to explore new markets, relocate your company or lower your production costs.</h6>
        <a class="waves-effect waves-light btn-large transparent" style="border: solid 1px black; border-color: white" href="#modal4">
          SCHEDULE NOW <i class="fa fa-chevron-right " aria-hidden="true" style="font-size: 13px"></i>
        </a>
      </div>
    </li>
  </ul>
  <button class="prev btn-flat white-text w3-display-left" style="z-index: 5; height: 50px; font-size: 36px">&#10094;</span></button>
  <button class="next btn-flat white-text w3-display-right" style="z-index: 5; height: 50px; font-size: 36px">&#10095;</button>
</div>

<!-- Academics -->
<div class="grey lighten-3">
  <div class="container">
    <div class="section">
      <h3 class="grey-text text-darken-2">Academics</h3>
    </div>
    <div class="section">
      <div class="row">
        <div class="col s12 m6">
          <div class="w3-card white">
            <img src="{{ asset('img/home/a-certification.jpg') }}" alt="CERTIFICATION" width="100%">
            <div class="w3-container white w3-margin-small">
              <h5 class="grey-text text-darken-1" style="padding-top: 20px"><b>WTC CERTIFICATION</b></h5>
              <p class="w3-justify w3-padding-16"></p>
              <a class="grey darken-2 w3-center w3-button w3-block white-text" style="margin: auto;margin-bottom: 25px; width: 80%; " href="#modal1" >
                <b>INSCRIBIRME</b>
              </a>
            </div>
          </div>
        </div>
          <div class="col s12 m6">
            <div class="w3-card white">
              <img src="{{ asset('img/home/a-lean6sigma.jpg') }}" alt="CERTIFICATION" width="100%">
              <div class="w3-container white w3-margin-small">
                <h5 class="grey-text text-darken-1" style="padding-top: 20px"><b>LEAN SIX SIGMA</b></h5>
                <p class="w3-justify w3-padding-16"></p>
                <a class="grey darken-2 w3-center w3-button w3-block white-text" style="margin: auto;margin-bottom: 25px; width: 80%; " href="#modal1" >
                  <b>INSCRIBIRME</b>
                </a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- End Academics -->

<!-- WTC Landing -->
<div class="wrapper">
  <div id="index-banner" class="parallax-container valign-wrapper w3-display-container" style="height: 550px;">
    <img src="{{ asset('img/home/landing-trans.png') }}" class="w3-display-left " style="height: 550px; width: 60%">
    <div class="parallax valign-wrapper"><img src="{{ asset('img/home/landing.jpg') }}" alt="Unsplashed background img 1"></div>
      <div class="caption left-align" style="padding-left: 10%; z-index: 100">
          <img src="{{ asset('img/home/wtc-landing.png') }}" width="50%">
          <br>
          <h5 class="light grey-text text-lighten-3">¡TU FUTURO ESTA SEGURO CON NOSOTROS!</h5>
          <a class="waves-effect waves-light white w3-btn pink-text text-darken-2 w3-padding-16" href="#modal1" >
            LEER MAS
          </a>
      </div>
      <div class="caption center-align hide-on-large-only">
      </div>
  </div>
</div>
<!-- End WTC Landing -->

<!-- Newsletter -->
<div style="background-color: #EBECEE; width:100%; height:300px" class="w3-display-container">
  <img src="{{ asset('img/home/newsletter.jpg') }}" width="100%" height="300px">
    <div class="w3-display-middle center">
      <h3 class="grey-text text-darken-2 hide-on-med-and-down"><b>¡Recibe las últimas noticias!</b></h3>
      <h6 class="grey-text text-darken-2"><b>¡Recibe las últimas noticias!</b></h5>
      <p class="grey-text text-darken-2 w3-tiny">Se parte de la red más grande de empresarios del país, suscríbete a nuestro Newsletter.</p>
          <a class="waves-effect waves-light w3-btn white-text w3-padding-16 grey darken-2" href="#modal1" >
            SUSCRIBIRME
          </a>
    </div>
</div>
<!-- End Newletter -->

<!-- Dining -->
<div class="wrapper">
  <div id="index-banner" class="parallax-container valign-wrapper w3-display-container" style="height: 550px;">
    <div class="parallax valign-wrapper"><img src="{{ asset('img/home/dining.jpg') }}" alt="Unsplashed background img 1"></div>
      <div class="caption left-align" style="padding-left: 10%; z-index: 100;">
          <div class="w3-half">
            <div class="w3-container transparent w3-padding">
              <h1 class="white-text">DINING</h1>
              <p class="w3-justify">Descrube nuestra gama de restaurantes y disfruta de nuestra oferta culinaria.</p>
              <a class="btn waves-effect waves-light white teal-text" href="#modal1" >
                INCRIBIRME
              </a>
            </div>
          </div>
      </div>
      <div class="caption center-align hide-on-large-only">
      </div>
  </div>
</div>
<!-- End Dining -->

<!-- WTC trade -->
<div class="wrapper">
  <div id="index-banner" class="parallax-container valign-wrapper w3-display-container" style="height: 550px;">

    <img src="{{ asset('img/home/trade-trans.png') }}" class="w3-display-right" style="height: 550px; width: 70%">
    <div class="parallax valign-wrapper"><img src="{{ asset('img/home/trade.png') }}" alt=""></div>
      <div class="caption left-align" style="z-index: 100; padding-left: 50%; ">
          <img src="{{ asset('img/home/wtc-trade.png') }}" width="50%">
          <br>
          <h5 class="light grey-text text-lighten-3"><b>Coworking Club</b></h5>
          <h6>Descrubre nuestra gama de restarutantes y disfruta de la propuesta culinaria</h6>
          <a class="waves-effect waves-light white w3-btn grey-text text-darken-2 w3-padding-16" href="#modal1" >
            AGENDAR
          </a>
      </div>
      <div class="caption center-align hide-on-large-only">
      </div>
  </div>
</div>
<!-- End WTC trade -->

<!-- Commerce -->
<div class="w3-row">
  <div class="w3-col s12 m5 w3-container valign-wrapper" style="background-color: #542581; height: 400px">
    <div class="w3-third">
      <img src="{{ asset('img/home/kchink-circle.png') }}" class="w3-right" height="100%">
    </div>
    <div class="w3-half">
      <div class="w3-container">
        <h2 class="w3-left white-text w3-left"><b>Commerce</b></h2>
      </div>
      <div class="w3-container">
        <p class="white-text w3-justify">Adquiere productos artesanales de nuestra selección única hehca sólo para ti.</p>
      </div>
      <div class="w3-container">
        <a class="W3-btn w3-block waves-effect waves-light white center w3-padding" href="#modal1" style="color: #542581;">
          ¡COMPRAR YA!
        </a>
      </div>
    </div>
  </div>
  <div class="w3-col s12 m7 w3-container">
    <h2 style="color: #542581; ">Los más vendidos</h2>
  </div>
</div>
<!-- End Commerce -->


<!-- Map -->
  <div class="">
    <iframe src="http://grupomomentum.com.mx/_renders/wtcq/v2/" style="width:100%; height: 650px;" marginheight="0" frameborder=0 scrolling="no"></iframe>
  </div>
<!-- End Map -->

<!-- Popup -->
<!-- Large -->
<div style="position: fixed; z-index: 10; bottom: 0;width: 100%; margin-bottom: -18px" class="hide-on-med-and-down" id="prueba">
   <ul id="general" class="collapsible w3-right" data-collapsible="accordion" style="width: 250px;">
    <li id="informes">
      <div class="collapsible-header white-text" style="background-color: #7E858D"><i class="material-icons">aspect_ratio</i>Informes de Ventas</div>
      <div class="collapsible-body white">
        <!--form class="w3-container" action="index.html" method="post">
          <label class="w3-text-gray w3-small"><b>Nombre</b></label>
          <input class="w3-input w3-border" style="height:30px" type="text">

          <label class="w3-text-gray"><b>Correo</b></label>
          <input class="w3-input w3-border" style="height:30px" type="text">

          <label class="w3-text-gray"><b>Telefono</b></label>
          <input class="w3-input w3-border" style="height:30px" type="text">

          <label class="w3-text-gray"><b>Mensaje</b></label>
          <input class="w3-input w3-border" style="height:30px" type="text">

          <button class="w3-btn w3-gray white-text center">Enviar</button>
        </form-->
        <h4>Teléfono:</h4>
        <h3><a href="tel:+52 442 294 8121" target="_blank">442 294 8121</a></h3>
    </li>
  </ul>
</div>
<!-- Responsive -->
<div style="position: fixed; z-index: 10; bottom: 0; width: 100%; margin-bottom: -18px; z-index: 1000" class="hide-on-large-only" id="prueba1">
   <ul id="general-movil" class="collapsible w3-right" data-collapsible="accordion">
    <li id="informes-movil">
      <div class="collapsible-header white-text" style="background-color: #7E858D"><i class="material-icons">aspect_ratio</i>Informes de Ventas</div>
      <div class="collapsible-body white">
        <!--form class="w3-container" action="index.html" method="post">
          <label class="w3-text-gray w3-small"><b>Nombre</b></label>
          <input class="w3-input w3-border" style="height:30px" type="text">

          <label class="w3-text-gray"><b>Correo</b></label>
          <input class="w3-input w3-border" style="height:30px" type="text">

          <label class="w3-text-gray"><b>Telefono</b></label>
          <input class="w3-input w3-border" style="height:30px" type="text">

          <label class="w3-text-gray"><b>Mensaje</b></label>
          <input class="w3-input w3-border" style="height:30px" type="text">

          <button class="w3-btn w3-gray white-text center">Enviar</button>
        </form-->
        <h4>Teléfono:</h4>
        <h3><a href="tel:+52 442 294 8121" target="_blank">442 294 8121</a></h3>
    </li>
  </ul>
</div>
<!-- Popup -->

<!-- Contact -->
<div class="container hide-on-med-and-down">
  <div class="section">
    <div class="w3-row">
      <div class="w3-half">
        <div id="googleMap" class="" style="width:100%;height:450px;"></div>
      </div>
      <div class="w3-half">
        <h3 class="center">Contact Us</h3>
        {{ Form::open(array('files' => true, 'method' => 'POST')) }}
        <div class="row">
          <div class="input-field col m10 offset-m1">
          {!! Form::label('name', 'Name') !!}
          {!! Form::text('name',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="input-field col m5 offset-m1">
          {!! Form::label('email', 'Mail') !!}
          {!! Form::email('email',null,['class' => 'form-control validate', 'required']) !!}
          </div>
          <div class="input-field col m5">
          {!! Form::label('phone', 'Phone') !!}
          {!! Form::text('phone',null,['class' => 'validate',  'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="col m10 offset-m1">
          {!! Form::label('description', 'Message') !!}
          {!! Form::textarea('description', null, ['class' => 'materialize-textarea']) !!}
          </div>
        </div>

        <div class="row">
          <div class="col m10 offset-m1 center">
          {!! Form::submit('Register',['class' => 'btn blue darken-1', 'style' => 'margin: auto']) !!}
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

<div class="container hide-on-large-only">
  <div class="section">
    <h3 class="center">Contáctanos</h3>
    {{ Form::open(array('files' => true, 'method' => 'POST')) }}
    <div class="row">
      <div class="input-field col s12 m6">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name',null,['class' => 'validate',  'required' => 'required']) !!}
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12 m3">
      {!! Form::label('email', 'Correo electrónico') !!}
      {!! Form::email('email',null,['class' => 'form-control validate', 'required']) !!}
      </div>
      <div class="input-field col s12 m3">
      {!! Form::label('phone', 'Teléfono') !!}
      {!! Form::text('phone',null,['class' => 'validate',  'required']) !!}
      </div>
    </div>

    <div class="row">
      <div class="col s12 m6">
      {!! Form::label('description', 'Mensaje') !!}
      {!! Form::textarea('description', null, ['class' => 'materialize-textarea']) !!}
      </div>
    </div>

    <div class="row">
      <div class="col s12 center">
      {!! Form::submit('Registrar',['class' => 'btn blue darken-1', 'style' => 'margin:auto']) !!}
      </div>
    </div>


    {!! Form::close() !!}
  </div>
</div>

<!-- Modal Reserva Ya -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="section">
        <img src="{{ asset('img/wtc-w.png') }}" class="" style="width: 10%; height: 10%">
        <button class="modal-close right btn-flat">X</button>
        <h5 class="center">Contact Us</h5>
        {{ Form::open(array('files' => true, 'method' => 'POST')) }}
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('name', 'Name') !!}
          {!! Form::text('name',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 m3 offset-m3">
          {!! Form::label('email', 'Mail') !!}
          {!! Form::email('email',null,['class' => 'form-control validate', 'required']) !!}
          </div>
          <div class="input-field col s12 m3">
          {!! Form::label('phone', 'Phone') !!}
          {!! Form::text('phone',null,['class' => 'validate',  'required']) !!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('enterprise', 'Enterprise') !!}
          {!! Form::text('enterprise',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="col s12 center">

          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
    <div class="modal-footer">
        <div class="w3-center">
        {!! Form::submit('Book Now',['class' => 'btn blue darken-1 center', 'style' => '']) !!}
        </div>
    </div>
  </div>

<!-- Modal Reserva Ya -->
  <div id="modal2" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="section">
        <img src="{{ asset('img/wtc-w.png') }}" class="center" style="width: 10%; height: 10%">
        <button class="modal-close right btn-flat">X</button>
        <h5 class="center">Contact Us</h5>
        {{ Form::open(array('files' => true, 'method' => 'POST')) }}
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('name', 'Name') !!}
          {!! Form::text('name',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 m3 offset-m3">
          {!! Form::label('email', 'Mail') !!}
          {!! Form::email('email',null,['class' => 'form-control validate', 'required']) !!}
          </div>
          <div class="input-field col s12 m3">
          {!! Form::label('phone', 'Phone') !!}
          {!! Form::text('phone',null,['class' => 'validate',  'required']) !!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('enterprise', 'Enterprise') !!}
          {!! Form::text('enterprise',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="col s12 center">

          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
    <div class="modal-footer">
         {!! Form::submit('Register',['class' => 'btn blue darken-1', 'style' => 'margin: auto']) !!}
    </div>
  </div>

<!-- Modal Reserva Ya -->
  <div id="modal4" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="section">
        <img src="{{ asset('img/wtc-w.png') }}" class="center" style="width: 10%; height: 10%">
        <button class="modal-close right btn-flat">X</button>
        <h5 class="center">Contact Us</h5>
        {{ Form::open(array('files' => true, 'method' => 'POST')) }}
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('name', 'Name') !!}
          {!! Form::text('name',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 m3 offset-m3">
          {!! Form::label('email', 'Mail') !!}
          {!! Form::email('email',null,['class' => 'form-control validate', 'required']) !!}
          </div>
          <div class="input-field col s12 m3">
          {!! Form::label('phone', 'Phone') !!}
          {!! Form::text('phone',null,['class' => 'validate',  'required']) !!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('enterprise', 'Enterprise') !!}
          {!! Form::text('enterprise',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="col s12 center">
          {!! Form::submit('Register',['class' => 'btn blue darken-1', 'style' => 'margin: auto']) !!}
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
    <div class="modal-footer">
        {!! Form::submit('Register',['class' => 'btn blue darken-1 center', 'style' => 'margin: auto']) !!}
    </div>
  </div>

@endsection
