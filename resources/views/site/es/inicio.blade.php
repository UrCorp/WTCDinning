@extends('site.es.templates.main')

@section('body-content')

<div class="slider w3-container-display" style="margin-top: -30px;">
  <ul class="slides valign-wrapper">
    <li>
      <img src="{{ asset('img/home/slider/momentum.jpg') }}">
      <div class="center white-text w3-display-middle">
        <h4 class="condensed">PREVENTA Y RENTA</h4>
        <h6 class="light grey-text text-lighten-3"></h6>
        <p>Elige el espacio para oficina o consultorio.</p>
        <a class="waves-effect waves-light btn-large transparent sliderbtn" href="#mPresale" >
          SABER MÁS <i class="fa fa-chevron-right " aria-hidden="true" style="font-size: 13px"></i>
        </a>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/home/slider/bg-accelerator.png') }}">
      <div class="center white-text w3-display-middle">
        <h4 class="condensed">AELERADORA WTC</h4>
        <h6 class="light grey-text text-lighten-3">Genera valor agregado a tu organización.</h6>
        <a class="waves-effect waves-light btn-large transparent sliderbtn" href="https://wtcqro.com/" target="_blank">
          CONOCE CÓMO <i class="fa fa-chevron-right " aria-hidden="true" style="font-size: 13px"></i>
        </a>
      </div>
    </li>
  </ul>
  <button class="prev btn-flat white-text w3-display-left" style="z-index: 5; height: 50px; font-size: 36px">&#10094;</span></button>
  <button class="next btn-flat white-text w3-display-right" style="z-index: 5; height: 50px; font-size: 36px">&#10095;</button>
</div>

<!-- Academics-->
  <div class="wrapper" >
    <div id="Academics" class="parallax-container valign-wrapper w3-display-container" style="height: 550px;">
      <img src="{{ asset('img/home/academics-trans.png') }}" class="w3-display-right hide-on-small-only" style="height: 550px; width: 60%">
      <img src="{{ asset('img/home/academics-trans.png') }}" class="w3-display-right hide-on-med-and-up" style="height: 550px; width: 100%">
      <div class="parallax valign-wrapper"><img src="{{ asset('img/home/academics.jpg') }}" alt=""></div>
        <div class="caption left-align hide-on-small-only" style="z-index: 100; margin-left: 50%; width:40%">
          <img src="{{ asset('img/home/wtc-accelerator.png') }}" width="100%">
          <br>

            <a class="waves-effect waves-light transparente w3-border w3-btn white-text w3-padding-16" href="https://wtcqro.com/"  target="_blank" style="margin-top:20px">
              Aceleradora WTC
            </a><br>
        </div>
        <div class="caption left-align hide-on-med-and-up" style="z-index: 100; margin: auto">
          <img src="{{ asset('img/home/wtc-accelerator.png') }}" width="100%">
            <a class="waves-effect waves-light transparente w3-border w3-btn white-text w3-padding-16" href="https://wtcqro.com/"  target="_blank" style="margin-top:20px">
              Aceleradora WTC
            </a><br>
        </div>
    </div>
  </div>
<!-- End Academics -->

<!-- [Newsletter] -->
<div id="Newsletter" style="background-color: #EBECEE; width:100%; height:300px" class="w3-display-container">
  <img src="{{ asset('img/home/newsletter.jpg') }}" width="100%" height="300px">
    <div class="w3-display-middle center">
      <h3 class="grey-text text-darken-2 hide-on-med-and-down"><b>¡Recibe nuestras últimas noticias!</b></h3>
      <h6 class="grey-text text-darken-2 hide-on-large-only"><b>¡Recibe nuestras últimas noticias!</b></h5>
      <p class="grey-text text-darken-2 hide-on-med-and-down">Se parte de la red de negocios más grande del mundo. Suscríbete a nuestro Boletín Informativo.</p>
      <p class="grey-text text-darken-2 w3-tiny hide-on-large-only">Se parte de la red de negocios más grande del mundo. Suscríbete a nuestro Boletín Informativo.</p>
          <a class="waves-effect waves-light w3-btn white-text w3-padding-16 grey darken-2" href="#mNewsletter" >
            SUSCRIBIRSE
          </a>
    </div>
</div>
<!-- End [Newsletter] -->

<!-- Momentum -->
  <div class="w3-container w3-padding-32 w3-padding-large">
    <div class="w3-half w3-padding-large">
      <h4 class="grismomentum">Trabajar aquí será un placer</h4>
      <p class="grismomentum">Amenidades únicas en su tipo:</p>
      <ul class="grismomentum">
        <li>7 salas de juntas</li>
        <li>Cancha de padel tenis</li>
        <li>Gimnasio</li>
        <li>Alberca Techada</li>
        <li>Regaderas</li>
        <li>Vapor</li>
        <li>Comedor</li>
        <li>Terraza</li>
        <li>Sala de Juegos</li>
      </ul>
      <p class="w3-justify grismomentum">Conoce el exclusivo desarrollo médico y empresarial <b>"World Trade Center Querétaro"</b> donde tienes lo mejor a tu alcance.</p>
      <p class="verdemomentum">Proyecto Pre-certificado MEES, Edificación Sustentable</p>
      <a class="w3-btn btnmomentum" href="#mPresale">Solicitar información</a>
    </div>
    <div class="w3-half w3-padding-large">
      <div class="row">
        <div class="col s5 m6 offset-s1">
          <img src="{{ asset('img/home/momentum/nite.jpg') }}" width="100%" style="padding: 3%">
        </div>
        <div class="col s5 m6">
          <img src="{{ asset('img/home/momentum/pool.jpg') }}" width="100%" style="padding: 3%">
        </div>
      </div>
      <div class="row">
        <div class="col s5 m6 offset-s1">
          <img src="{{ asset('img/home/momentum/day.jpg') }}" width="100%" style="padding: 3%">
        </div>
        <div class="col s5 m6">
          <img src="{{ asset('img/home/momentum/inside.jpg') }}" width="100%" style="padding: 3%">
        </div>
      </div>
    </div>
  </div>
<!-- End Momentum -->

<!-- [Strategic Allies] -->
  <div class="w3-panel">
    <h3 class="center">Nuestros Aliados</h3>
    <div class="row" style="width:90%">
      <div class="col s4 m2 offset-m1">
        <a href="https://aeromexico.com/es-mx" target="_blank"><img src="{{ asset('img/home/aliados/aeromexico.png') }}" width="100%" alt=""></a>
      </div>
      <div class="col s4 m2">
        <a href="#mAudi" target="_blank">
          <img src="{{ asset('img/home/aliados/audi.png') }}" width="100%" alt="">
        </a>
      </div>
      <div class="col s4 m2">
        <a href="https://connectamericas.com/company/world-trade-center-queretaro" target="_blank">
          <img src="{{ asset('img/home/aliados/bid.png') }}" width="100%" alt="">
        </a>
      </div>
      <div class="col s4 m2">
        <a href="#mNena" target="_blank">
          <img src="{{ asset('img/home/aliados/nena.jpg') }}" width="100%" alt="">
        </a>
      </div>
      <div class="col s4 m2">
        <a href="#mGp">
          <img src="{{ asset('img/home/aliados/proyectos.png') }}" width="100%" alt="">
        </a>
      </div>
    </div>
  </div>
<!-- End [Strategic Allies] -->

<!-- WTC trade -->
<div id="WeTrade" class="wrapper">
  <div id="index-banner" class="parallax-container valign-wrapper w3-display-container" style="height: 550px;">
    <img src="{{ asset('img/home/trade-trans.png') }}" class="w3-display-right hide-on-small-only" style="height: 550px; width: 60%">
    <img src="{{ asset('img/home/trade-trans.png') }}" class="w3-display-right hide-on-med-and-up" style="height: 550px; width: 100%">
    <div class="parallax valign-wrapper"><img src="{{ asset('img/home/trade.jpg') }}" alt=""></div>
      <div class="caption left-align" style="z-index: 100; padding-left: 65%; padding-top: 5%">
          <img src="{{ asset('img/home/trade-wtc.png') }}" width="40%">
          <br>
          <h5 class="light grey-text text-lighten-3"><b>Coworking Club</b></h5>
          <h6>¡Próximamente!</h6>
          <a class="waves-effect waves-light white w3-btn grey-text text-darken-2 w3-padding-16" href="#modal1" >
            Agenda Ahora
          </a>
      </div>
      <div class="caption center-align hide-on-large-only">
      </div>
  </div>
</div>
<!-- End WTC trade -->

<!-- [Partners] -->
<hr>
  <div class="w3-panle">
    <h3 class="center">Nuestros Socios</h3>
    <div class="row">
      <div class="col s4 m2 offset-m2">
          <img src="{{ asset('img/home/socios/alterra.png') }}" width="100%" alt="">
      </div>
      <div class="col s4 m2">
          <img src="{{ asset('img/home/socios/momentum.png') }}" width="100%" alt="">
      </div>
      <div class="col s4 m2">
          <img src="{{ asset('img/home/socios/lumico.png') }}" width="100%" alt="">
      </div>
      <div class="col s4 m2 offset-s4">
          <img src="{{ asset('img/home/socios/goyen.png') }}" width="100%" alt="">
      </div>
    </div>
  </div>
  <hr>
<!-- End [Partners] -->

<!-- Contact -->
<div class="container">
  <div class="section">
    <div class="w3-row">
      <div class="w3-half hide-on-med-and-down">
        <div id="googleMap" class="" style="width:100%;height:450px;"></div>
      </div>
      <div class="w3-half">
        <h3 class="center">Contacto</h3>
        {!! Form::open(['route' => 'site.contact.contact', 'id' => 'form-contact', 'method' => 'POST']) !!}
        <div class="row">
          <div class="form-group col s12 l10 offset-l1">
            {!! Form::label('contact[name]', 'Nombre *') !!}
            {!! Form::text('contact[name]', null, ['class' => 'validate form-control', 'maxlength' => 60, 'required' => 'required']) !!}
          </div>
          <div class="form-group col s12 l5 offset-l1">
            {!! Form::label('contact[email]', 'eMail *') !!}
            {!! Form::email('contact[email]', null, ['class' => 'form-control validate', 'maxlength' => 250, 'required' => 'required']) !!}
          </div>
          <div class="form-group col s12 l5">
            {!! Form::label('contact[phone]', 'Teléfono *') !!}
            {!! Form::text('contact[phone]', null, ['class' => 'form-control', 'pattern' => '^[0-9]{10,10}$', 'required' => 'required']) !!}
          </div>
          <div class="form-group col s12 l10 offset-l1">
            {!! Form::label('contact[message]', 'Mensaje *') !!}
            {!! Form::text('contact[message]', null, ['class' => 'form-control', 'maxlength' => 60, 'required' => 'required']) !!}
          </div>
          <div class="col l10 offset-l1 center">
          {!! Form::submit('Send',['class' => 'btn blue darken-1', 'style' => 'margin: auto']) !!}
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- End [Contact] -->

<!-- END PAGE -->

<!--START [HELPERS:Modals] -->
<!-- [Presale - slider form] -->
  <div id="mPresale" class="modal modal-fixed-footer">
    {!! Form::open(['route' => 'site.contact.presale', 'method' => 'POST']) !!}
    <div class="modal-content">
      <div class="section">
        <img src="{{ asset('img/wtc-w.png') }}" class="" style="width: 10%; height: 10%">
        <button class="modal-close right btn-flat">X</button>
        <h5 class="center">Preventa y Renta</h5>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('presale[name]', 'Nombre') !!}
          {!! Form::text('presale[name]',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 m3 offset-m3">
          {!! Form::label('presale[email]', 'Correo Electrónico') !!}
          {!! Form::email('presale[email]',null,['class' => 'form-control validate', 'required']) !!}
          </div>
          <div class="input-field col s12 m3">
          {!! Form::label('presale[phone]', 'Teléfono') !!}
          {!! Form::text('presale[phone]',null,['class' => 'validate',  'required']) !!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('presale[enterprise]', 'Empresa') !!}
          {!! Form::text('presale[enterprise]',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
        <div class="w3-center">
        {!! Form::submit('Envíar',['class' => 'btn blue darken-1 center', 'style' => '']) !!}
        </div>
    </div>
    {!! Form::close() !!}
  </div>
<!-- End [Presale - slider form] -->

<!-- [Newsletter] -->
  <div id="mNewsletter" class="modal modal-fixed-footer">
    {!! Form::open(['route' => 'site.contact.newsletter', 'method' => 'POST']) !!}
    <div class="modal-content">
      <div class="section">
        <img src="{{ asset('img/wtc-w.png') }}" class="" style="width: 10%; height: 10%">
        <button class="modal-close right btn-flat">X</button>
        <h5 class="center">Newsletter</h5>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('newsletter[name]', 'Nombre *') !!}
          {!! Form::text('newsletter[name]',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 m3 offset-m3">
          {!! Form::label('newsletter[email]', 'Correo Electrónico *') !!}
          {!! Form::email('newsletter[email]',null,['class' => 'form-control validate', 'required']) !!}
          </div>
          <div class="input-field col s12 m3">
          {!! Form::label('newsletter[phone]', 'Teléfono *') !!}
          {!! Form::text('newsletter[phone]',null,['class' => 'validate',  'required']) !!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('newsletter[enterprise]', 'Empresa') !!}
          {!! Form::text('newsletter[enterprise]',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
        <div class="w3-center">
        {!! Form::submit('Suscribirse',['class' => 'btn blue darken-1 center', 'style' => '']) !!}
        </div>
    </div>
    {!! Form::close() !!}
  </div>
<!-- End [Newsletter] -->

<!-- [Pop-up Audi] -->
  <div id="mAudi" class="modal modal-fixed-footer">
    {!! Form::open(['route' => 'site.contact.audi', 'method' => 'POST']) !!}
    <div class="modal-content">
      <div class="section w3-display-container">
        <img src="{{ asset('img/home/aliados/audi.png') }}" class="w3-display-topmiddle " style="width: 200px;">
        <button class="modal-close right btn-flat">X</button>
        <div class="row" style="margin-top:100px;">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('audi[name]', 'Nombre') !!}
          {!! Form::text('audi[name]',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 m3 offset-m3">
          {!! Form::label('audi[email]', 'Correo') !!}
          {!! Form::email('audi[email]',null,['class' => 'form-control validate', 'required']) !!}
          </div>
          <div class="input-field col s12 m3">
          {!! Form::label('audi[phone]', 'Teléfono') !!}
          {!! Form::text('audi[phone]',null,['class' => 'validate',  'required']) !!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('audi[enterprise]', 'Empresa') !!}
          {!! Form::text('audi[enterprise]',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
        <div class="w3-center">
        {!! Form::submit('Book Now',['class' => 'btn blue darken-1 center', 'style' => '']) !!}
        </div>
    </div>
    {!! Form::close() !!}
  </div>
<!-- End [Pop-up Audi] -->

<!-- [Pop-up Grupo Momentum] -->
  <div id="mGp" class="modal modal-fixed-footer">
    {!! Form::open(['route' => 'site.contact.gp', 'method' => 'POST']) !!}
    <div class="modal-content">
      <div class="section w3-display-container">
        <img src="{{ asset('img/home/aliados/proyectos.png') }}" class="w3-display-topmiddle " style="width: 200px;">
        <button class="modal-close right btn-flat">X</button>
        <div class="row" style="margin-top:100px;">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('gp[name]', 'Nombre') !!}
          {!! Form::text('gp[name]',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 m3 offset-m3">
          {!! Form::label('gp[email]', 'Correo') !!}
          {!! Form::email('gp[email]',null,['class' => 'form-control validate', 'required']) !!}
          </div>
          <div class="input-field col s12 m3">
          {!! Form::label('gp[phone]', 'Teléfono') !!}
          {!! Form::text('gp[phone]',null,['class' => 'validate',  'required']) !!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('gp[enterprise]', 'Empresa') !!}
          {!! Form::text('gp[enterprise]',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
        <div class="w3-center">
        {!! Form::submit('Book Now',['class' => 'btn blue darken-1 center', 'style' => '']) !!}
        </div>
    </div>
    {!! Form::close() !!}
  </div>
<!-- End [Pop-up Grupo Momentum] -->

<!-- [Pop-up Nena] -->
  <div id="mNena" class="modal modal-fixed-footer">
    {!! Form::open(['route' => 'site.contact.nena', 'method' => 'POST']) !!}
    <div class="modal-content">
      <div class="section w3-display-container">
        <img src="{{ asset('img/home/aliados/nena.jpg') }}" class="w3-display-topmiddle " style="width: 200px;">
        <button class="modal-close right btn-flat">X</button>
        <div class="row" style="margin-top:100px;">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('nena[name]', 'Nombre') !!}
          {!! Form::text('nena[name]',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 m3 offset-m3">
          {!! Form::label('nena[email]', 'Correo') !!}
          {!! Form::email('nena[email]',null,['class' => 'form-control validate', 'required']) !!}
          </div>
          <div class="input-field col s12 m3">
          {!! Form::label('nena[phone]', 'Teléfono') !!}
          {!! Form::text('nena[phone]',null,['class' => 'validate',  'required']) !!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('nena[enterprise]', 'Empresa') !!}
          {!! Form::text('nena[enterprise]',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
        <div class="w3-center">
        {!! Form::submit('Book Now',['class' => 'btn blue darken-1 center', 'style' => '']) !!}
        </div>
    </div>
    {!! Form::close() !!}
  </div>
<!-- End [Pop-up Nena] -->
@endsection
