@extends('site.es.templates.main')

@section('body-content')

<div class="slider w3-container-display" style="margin-top: -30px;">
  <ul class="slides valign-wrapper">
    <li>
      <img src="{{ asset('img/home/slider/momentum.png') }}">
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
      <img src="{{ asset('img/home/slider/softlanding.png') }}">
      <div class="center white-text w3-display-middle">
        <h4 class="condensed">CERTIFICACIÓN WTC QRO</h4>
        <h6 class="light grey-text text-lighten-3">Genera valor agregado a tu organización.</h6>
        <a class="waves-effect waves-light btn-large transparent sliderbtn" href="Certification">
          CONOCE CÓMO <i class="fa fa-chevron-right " aria-hidden="true" style="font-size: 13px"></i>
        </a>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/home/slider/zocalo.png') }}">
      <div class="center white-text w3-display-middle">
        <h4 class="condensed ligth">SOFTLANDING</h4>
        <h6 class="light grey-text text-lighten-3">Obtén apoyo para explorar nuevos mercados, relocalizar tu compañía o bajar costos de operación.</h6>
        <a class="waves-effect waves-light btn-large transparent sliderbtn" href="#modal4">
          AGENDA AHORA<i class="fa fa-chevron-right " aria-hidden="true" style="font-size: 13px"></i>
        </a>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/home/slider/cestos.png') }}">
      <div class="center white-text w3-display-middle">
        <h4 class="condensed ligth">ARTESANÍAS MEXICANAS</h4>
        <h6 class="light grey-text text-lighten-3">Adquiere hermosos productos, creados por manos de artesanos Mexicanos en nuestra tienda exclusiva.</h6>
        <a class="waves-effect waves-light btn-large transparent sliderbtn" target="_blank" href="https://www.kichink.com/stores/kanpai">
          <i class="material-icons right">shop</i>
          Ir a la Tienda
        </a>
      </div>
    </li>
  </ul>
  <button class="prev btn-flat white-text w3-display-left" style="z-index: 5; height: 50px; font-size: 36px">&#10094;</span></button>
  <button class="next btn-flat white-text w3-display-right" style="z-index: 5; height: 50px; font-size: 36px">&#10095;</button>
</div>

<!-- Academics-->
  <div class="wrapper" style="margin-top: -40px">
    <div id="index-banner" class="parallax-container valign-wrapper w3-display-container" style="height: 550px;">
      <img src="{{ asset('img/home/academics-trans.png') }}" class="w3-display-right" style="height: 550px; width: 70%">
      <div class="parallax valign-wrapper"><img src="{{ asset('img/home/academics.jpg') }}" alt=""></div>
        <div class="caption left-align" style="z-index: 100; padding-left: 50%; ">
            <h2 class="light grey-text text-lighten-3"><b>Academia</b></h2>
            <h6>¡Coming Soon!</h6>
            <a class="waves-effect waves-light transparente w3-border w3-btn white-text w3-padding-16" href="Lean-SixSigma" style="margin-top:10px">
              Certificación Lean Six Sigma
            </a><br>
            <a class="waves-effect waves-light transparente w3-border w3-btn white-text w3-padding-16" href="Certification" style="margin-top:10px">
              Certificación Corporativa WTC QRO
            </a><br>
            <a class="waves-effect waves-light transparente w3-border w3-btn white-text w3-padding-16" href="Lean-SixSigma" style="margin-top:10px">
              Programa de Trascendencia WTC QRO
            </a>
        </div>
        <div class="caption center-align hide-on-large-only">
        </div>
    </div>
  </div>
<!-- End Academics -->

<!-- Newsletter -->
<div style="background-color: #EBECEE; width:100%; height:300px" class="w3-display-container">
  <img src="{{ asset('img/home/newsletter.jpg') }}" width="100%" height="300px">
    <div class="w3-display-middle center">
      <h3 class="grey-text text-darken-2 hide-on-med-and-down"><b>¡RECIBE NUESTRAS ÚLTIMAS NOTICIAS!</b></h3>
      <h6 class="grey-text text-darken-2 hide-on-large-only"><b>¡Recibe nuestras últimas noticias!</b></h5>
      <p class="grey-text text-darken-2 hide-on-med-and-down">Se parte de la red de negocios más grande del mundo. Suscríbete a nuestro Newsletter.</p>
      <p class="grey-text text-darken-2 w3-tiny hide-on-large-only">Se parte de la red de negocios más grande en el país. Subscríbete a nuestro Boletín Informativo.</p>
          <a class="waves-effect waves-light w3-btn white-text w3-padding-16 grey darken-2" href="#mNewsletter" >
            SUSCRIBIRSE
          </a>
    </div>
</div>
<!-- End Newletter -->

<!-- WTC Landing -->
<div class="wrapper">
  <div id="index-banner" class="parallax-container valign-wrapper w3-display-container" style="height: 550px;">
    <img src="{{ asset('img/home/landing-trans.png') }}" class="w3-display-left " style="height: 550px; width: 60%">
    <div class="parallax valign-wrapper"><img src="{{ asset('img/home/landing.jpg') }}" alt="Unsplashed background img 1"></div>
      <div class="caption left-align" style="padding-left: 10%; z-index: 100">
          <img src="{{ asset('img/home/wtc-landing.png') }}" width="50%">
          <br>
          <h5 class="light grey-text text-lighten-3">¡EL FUTURO DE TU EMPRESA ESTÁ A SALVO CON NOSOTROS!</h5>
          <a class="waves-effect waves-light white w3-btn pink-text text-darken-2 w3-padding-16" href="#modal1" >
            CONOCE MÁS
          </a>
      </div>
      <div class="caption center-align hide-on-large-only">
      </div>
  </div>
</div>
<!-- End WTC Landing -->

<!-- Map -->
<div class="grey lighten-3" style="margin-top: -30px">
  <h2 class="center grismomentum hide-on-med-and-down" style="margin-top: 30px">Elige tu espacio oficina o consultorio médico</h2>
  <h5 class="center grismomentum hide-on-large-only" style="margin-top: 20px">Elige tu propia oficina o consultorio</h5>
  <div class="">
    <iframe src="http://grupomomentum.com.mx/_renders/wtcq/v2/" style="width:100%; height: 650px;" marginheight="0" frameborder=0 scrolling="no"></iframe>
  </div>
</div>
<!-- End Map -->

<!-- Dining -->
<div class="wrapper">
  <div id="index-banner" class="parallax-container valign-wrapper w3-display-container" style="height: 550px;">
    <img src="{{ asset('img/home/dining-trans.png') }}" class="w3-display-left " style="height: 550px; width: 60%">
    <div class="parallax valign-wrapper"><img src="{{ asset('img/home/dining.jpg') }}" alt="Unsplashed background img 1"></div>
      <div class="caption left-align" style="padding-left: 10%; z-index: 100">
        <h1 class="white-text">RESERVACIONES</h1>
        <p class="w3-justify" style="width:50%">Escoja dentro de nuestra amplia gama de restaurantes aliados la diversa oferta culinaria que tienen para ofrecer.</p>
        <a class="btn waves-effect waves-light white teal-text" href="Dining" >
          RESERVACIONES
        </a>
      </div>
      <div class="caption center-align hide-on-large-only">
      </div>
  </div>
</div>
<!-- End Dining -->

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
        <li>Sky Garden</li>
        <li>Sala de Juegos</li>
      </ul>
      <p class="w3-justify grismomentum">Conoce el exclusivo desarrollo médico y empresarial <b>World Trade Center...</b> donde tienes lo mejor a tu alcance.</p>
      <p class="verdemomentum">Proyecto Pre-certificado MEES, Edificación Sustentable</p>
      <a class="w3-btn btnmomentum" href="">Solicitar información</a>
      <a class="w3-btn btnmomentum" href="http://grupomomentum.com.mx/_renders/momentum-juriquilla/360/" target="_blank">Recorrido Virtual</a>
    </div>
    <div class="w3-half w3-padding-large">
      <div class="w3-row">
        <div class="w3-half">
          <img src="{{ asset('img/home/momentum/nite.jpg') }}" width="100%" style="padding: 3%">
        </div>
        <div class="w3-half">
          <img src="{{ asset('img/home/momentum/pool.jpg') }}" width="100%" style="padding: 3%">
        </div>
      </div>
      <div class="w3-row">
        <div class="w3-half">
          <img src="{{ asset('img/home/momentum/day.jpg') }}" width="100%" style="padding: 3%">
        </div>
        <div class="w3-half">
          <img src="{{ asset('img/home/momentum/inside.jpg') }}" width="100%" style="padding: 3%">
        </div>
      </div>
    </div>
  </div>
<!-- End Momentum -->

<!-- WTC trade -->
<div class="wrapper">
  <div id="index-banner" class="parallax-container valign-wrapper w3-display-container" style="height: 550px;">

    <img src="{{ asset('img/home/trade-trans.png') }}" class="w3-display-right" style="height: 550px; width: 70%">
    <div class="parallax valign-wrapper"><img src="{{ asset('img/home/trade.png') }}" alt=""></div>
      <div class="caption left-align" style="z-index: 100; padding-left: 50%; ">
          <img src="{{ asset('img/home/wtc-trade.png') }}" width="50%">
          <br>
          <h5 class="light grey-text text-lighten-3"><b>Coworking Club</b></h5>
          <h6>¡Coming Soon!</h6>
          <a class="waves-effect waves-light white w3-btn grey-text text-darken-2 w3-padding-16" href="#modal1" >
            Schedule Now
          </a>
      </div>
      <div class="caption center-align hide-on-large-only">
      </div>
  </div>
</div>
<!-- End WTC trade -->

<!-- [Strategic Allies] -->
  <div class="w3-panle">
    <h3 class="center">Our Allies</h3>
    <div class="row">
      <div class="col s12 m2 offset-m1">
        <a href="https://aeromexico.com/es-mx" target="_blank">
          <img src="{{ asset('img/home/aliados/aeromexico.png') }}" width="100%" alt="">
        </a>
      </div>
      <div class="col s12 m2">
        <a href="http://audicenterjuriquilla.com.mx" target="_blank">
          <img src="{{ asset('img/home/aliados/audi.png') }}" width="100%" alt="">
        </a>
      </div>
      <div class="col s12 m2">
        <a href="http://hotelnena.mx" target="_blank">
          <img src="{{ asset('img/home/aliados/nena.jpg') }}" width="100%" alt="">
        </a>
      </div>
      <div class="col s12 m2">
        <a href="#">
          <img src="{{ asset('img/home/aliados/proyectos.png') }}" width="100%" alt="">
        </a>
      </div>
      <div class="col s12 m2">
        <a href="http://urcorp.mx" target="_blank">
          <img src="{{ asset('img/home/aliados/URCORP.png') }}" width="100%" alt="">
        </a>
      </div>
    </div>
  </div>
<!-- End [Strategic Allies] -->

<!-- [Partners] -->
<hr>
  <div class="w3-panle">
    <h3 class="center">Our Partners</h3>
    <div class="row">
      <div class="col s12 m2 offset-m2">
        <a href="#">
          <img src="{{ asset('img/home/socios/alterra.png') }}" width="100%" alt="">
        </a>
      </div>
      <div class="col s12 m2">
        <a href="http://grupomomentum.com.mx/project/world-trade-center-queretaro/" target="_blank">
          <img src="{{ asset('img/home/socios/momentum.png') }}" width="100%" alt="">
        </a>
      </div>
      <div class="col s12 m2">
        <a href="#">
          <img src="{{ asset('img/home/socios/lumico.png') }}" width="100%" alt="">
        </a>
      </div>
      <div class="col s12 m2">
        <a href="#">
          <img src="{{ asset('img/home/socios/goyen.png') }}" width="100%" alt="">
        </a>
      </div>
    </div>
  </div>
  <hr>
<!-- End [Partners] -->

<!-- Contact -->
<div class="container hide-on-med-and-down">
  <div class="section">
    <div class="w3-row">
      <div class="w3-half">
        <div id="googleMap" class="" style="width:100%;height:450px;"></div>
      </div>
      <div class="w3-half">
        <h3 class="center">Contacto</h3>
        {{ Form::open(array('files' => true, 'method' => 'POST')) }}
        <div class="row">
          <div class="input-field col m10 offset-m1">
          {!! Form::text('name',null,['class' => 'validate',  'required' => 'required']) !!}
          {!! Form::label('name', 'Nombre') !!}
          </div>
        </div>

        <div class="row">
          <div class="input-field col m5 offset-m1">
          {!! Form::label('email', 'Correo Electrónico') !!}
          {!! Form::email('email',null,['class' => 'form-control validate', 'required']) !!}
          </div>
          <div class="input-field col m5">
          {!! Form::label('phone', 'Teléfono') !!}
          {!! Form::text('phone',null,['class' => 'validate',  'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="input-field col m10 offset-m1">
          {!! Form::label('description', 'Mensaje') !!}
          {!! Form::textarea('description', null, ['class' => 'materialize-textarea']) !!}
          </div>
        </div>

        <div class="row">
          <div class="col m10 offset-m1 center">
          {!! Form::submit('Envíar',['class' => 'btn blue darken-1', 'style' => 'margin: auto']) !!}
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
      <div class="col s12 m6">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name',null,['class' => 'validate',  'required' => 'required']) !!}
      </div>
    </div>

    <div class="row">
      <div class="col s12 m3">
      {!! Form::label('email', 'Correo electrónico') !!}
      {!! Form::email('email',null,['class' => 'form-control validate', 'required']) !!}
      </div>
      <div class="col s12 m3">
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
        {!! Form::submit('Registrarse',['class' => 'btn blue darken-1 center', 'style' => '']) !!}
        </div>
    </div>
    {!! Form::close() !!}
  </div>
<!-- End [Newsletter] -->


@endsection
