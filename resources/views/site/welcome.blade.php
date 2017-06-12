@extends('site.templates.main')

@section('body-content')

<div class="slider grey lighten-4" style="z-index: 3">
  <ul class="slides valign-wrapper">
    <li>
      <img src="{{ asset('img/home/slider/momentum.png') }}">
      <div class="caption center-align">
        <h4 class="condensed" style="padding-top: 130px">VISITA EL NUEVO EDIFICIO</h4>
        <h6 class="light grey-text text-lighten-3">Agenda una visita para conocer tus nuevas oficinas y consultorios en WTC.</h6>
        <a class="waves-effect waves-light btn-large transparent" style="border-color: white" href="#modal1" >
          Reserva ya
        </a>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/home/slider/softlanding.png') }}">
      <div class="caption center-align">
        <h4 class="condensed" style="padding-top: 130px">CERTIFICACIÓN WORLD TRADE CENTER</h4>
        <h6 class="light grey-text text-lighten-3">Genera un valor agregado a tu organización de nivel internacional.</h6>
        <a class="waves-effect waves-light btn-large transparent" style="border-color: white">Conoce cómo</a>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/home/slider/cestos.png') }}">
      <div class="caption center-align">
        <h4 class="condensed ligth" style="padding-top: 130px">ADQUIERE ARTESARNÍAS EXLCUSIVAS</h4>
        <h6 class="light grey-text text-lighten-3">Descubre el talento de manos Queretanas en la nueva tienda en línea de WTC.</h6>
        <a class="waves-effect waves-light btn-large transparent" style="border-color: white" href="https://www.kichink.com/stores/kanpai">
          <i class="material-icons right">shop</i>
          Ir a la Tienda
        </a>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/home/slider/zocalo.png') }}">
      <div class="caption center-align">
        <h4 class="condensed ligth" style="padding-top: 130px">SOFTLANDING</h4>
        <h6 class="light grey-text text-lighten-3">Ofrecemos guía y apoyo paso a paso para establecer tu empresa en México.</h6>
        <a class="waves-effect waves-light btn-large transparent" style="border-color: white">Agenda una consultoría gratis</a>
      </div>
    </li>
  </ul>
</div>


<div class="grey lighten-4">
  <div class="container">
  <div class="section"></div>
  <div class="section"></div>
  <div class="section">
    <div class="row">
      <br>
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="{{ asset('img/home/cardRealEstate.jpg') }}">
          </div>
        </div>
        <p class="promo-caption center">Real Estate</p>
        <p class="light center">Discover our exclusive corporate and medical complex, surrounded by commercial areas, persuading investment in the Bajio Region.</p>
      </div>
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="{{ asset('img/home/cardSoftLanding.jpg') }}">
          </div>
        </div>
        <p class="promo-caption center">Softlanding</p>
        <p class="light center">WTC guides you systematically to establish your company in Mexico; we take care of everything so you can dedicate to grow your business.</p>
      </div>
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="{{ asset('img/home/cardTradeMissions.jpg') }}">
          </div>
        </div>
        <p class="promo-caption center">Speeds up development</p>
        <p class="light center">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components.</p>
      </div>
    </div>
    </div>
  </div>
</div>

<div class="container center-align">
  <div class="section">
    <div class="row">
        <h4 class="center">Let's talk about business</h4>
        <p class="col s6 offset-s3 center">World Trade Center is a global platform that promotes international trade, with a Supplier Network located in the most important cities in the world.</p>
    </div>
    <div class="video-container center">
      <iframe  width="854" height="480" src="https://www.youtube.com/embed/cHr360f6naM" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="row center">
      <br>
      <br>
      <a class="waves-effect waves-light btn-flat blue-text"> Program your virtual consultancy</a>
      <br>
      <br>
      <br>
    </div>
  </div>
</div>

<div class="wrapper">
  <div id="index-banner" class="parallax-container" style="height: 300px;">
    <div class="parallax grey lighten-4 valign-wrapper"><img src="{{ asset('img/home/arcos.png') }}" alt="Unsplashed background img 1"></div>
      <div class="caption center-align hide-on-med-and-down">
        <h3 class="black-text">QUERÉTARO</h3>
        <div class="row">
          <div class="col s12 m7 offset-m3">
            <div class="black-text text-lighten-3">Named several times as the safest and best life quality city in the country.</div>
          </div>
        </div>
        <div class="row">
          <div class="col s7 offset-s3">
            <div class="black-text text-lighten-3"> Discover the main activities in the fastest growing city in Latin America.</div>
          </div>
        </div>
      </div>
      <div class="caption center-align hide-on-large-only">
        <h3 class="black-text">QUERÉTARO!</h3>
        <div class="row">
          <div class="col s12 m7 offset-m3">
            <div class="black-text text-lighten-3">Named several times as the safest and  </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m7 offset-m3">
            <div class="black-text text-lighten-3">sbest life quality city in the country.</div>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m7 offset-m3">
            <div class="black-text text-lighten-3">Discover the main activities in the </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m7 offset-m3">
            <div class="black-text text-lighten-3">fastest growing city in Latin America.</div>
          </div>
        </div>
      </div>
  </div>  
</div>

<div id="index-banner" class="parallax-container" style="height: 300px;">
  <div class="parallax"><img src="{{ asset('img/home/celphone.jpg') }}" alt="Unsplashed background img 1"></div>
</div>

<div class="container hide-on-small-only">
  <div class="section">
    <h3 class="center">Contact Us</h3>
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
      <div class="col s12 m6 offset-m3">
      {!! Form::label('description', 'Message') !!}
      {!! Form::textarea('description', null, ['class' => 'materialize-textarea']) !!}
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
      {!! Form::submit('Registrar',['class' => 'btn blue darken-1', 'style' => 'margin: auto']) !!}
      </div>
    </div>


    {!! Form::close() !!}
  </div>
</div>


<!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>    

@endsection
