@extends('site.templates.main')

@section('body-content')

<div class="slider" style="z-index: 3">
  <ul class="slides valign-wrapper">
    <li>
      <img src="{{ asset('img/home/slider/momentum.png') }}">
      <div class="caption center-align">
        <h4 class="condensed">VISITA EL NUEVO EDIFICIO</h4>
        <h6 class="light grey-text text-lighten-3">Agenda una visita para conocer tus nuevas oficinas y consultorios en WTC.</h6>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/home/slider/cestos.png') }}">
      <div class="caption center-align">
        <h4 class="condensed ligth">ADQUIERE ARTESARNÍAS EXLCUSIVAS</h4>
        <h6 class="light grey-text text-lighten-3">Descubre el talento de manos Queretanas en la nueva tienda en línea de WTC.</h6>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/home/slider/zocalo.png') }}">
      <div class="caption center-align">
        <h4 class="condensed ligth">SOFTLANDING</h4>
        <h6 class="light grey-text text-lighten-3">Ofrecemos guía y apoyo paso a paso para establecer tu empresa en México.</h6>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/home/slider/handshake.jpg') }}">
      <div class="caption center-align">
        <h4 class="condensed ligth">HACEMOS TU AGENDA DE NEGOCIOS</h4>
        <h6 class="light grey-text text-lighten-3">Te conectamos con todos los proveedores de la red global de World Trade Center.</h6>
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
        <p class="light center">Conóce el exclusivo complejo corporativo y médico, arropado por las áreas comerciales de mayor prestigio en el Bajío.</p>
      </div>
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image">
            <img src="{{ asset('img/home/cardSoftLanding.jpg') }}">
          </div>
        </div>
        <p class="promo-caption center">Softlanding</p>
        <p class="light center">WTC te guía paso a paso para establecer tu empresa en México, nos encargamos de todo para que tú te dediques a crecer tu negocio.</p>
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
        <h4 class="center">HABLEMOS DE NEGOCIOS</h4>
        <p class="col s6 offset-s3 center">World Trade Center es un plataforma global que promueve el comercio internacional, con una red de proveedores ubicadas en las ciudades más importantes del mundo.</p>
    </div>
    <div class="video-container center">
      <iframe  width="854" height="480" src="https://www.youtube.com/embed/cHr360f6naM" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="row center">
      <br>
      <br>
      <a class="waves-effect waves-light btn-flat blue-text">Agenda una consultoría virtual</a>
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
        <h3 class="black-text">QUERÉTARO!</h3>
        <div class="row">
          <div class="col s12 m7 offset-m3">
            <div class="black-text text-lighten-3">Nombrada en varias ocasiones la Ciudad más segura y con mejor calidad de vida del país.</div>
          </div>
        </div>
        <div class="row">
          <div class="col s7 offset-s3">
            <div class="black-text text-lighten-3">Descubre lo que hay que hacer en la ciudad de mayor crecimiento en América Latina.</div>
          </div>
        </div>
      </div>
      <div class="caption center-align hide-on-large-only">
        <h3 class="black-text">QUERÉTARO!</h3>
        <div class="row">
          <div class="col s12 m7 offset-m3">
            <div class="black-text text-lighten-3">Nombrada en varias ocasiones la Ciudad más</div>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m7 offset-m3">
            <div class="black-text text-lighten-3">segura y con mejor calidad de vida del país.</div>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m7 offset-m3">
            <div class="black-text text-lighten-3">Descubre lo que hay que hacer en la ciudad</div>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m7 offset-m3">
            <div class="black-text text-lighten-3">de mayor crecimiento en América Latina.</div>
          </div>
        </div>
      </div>
  </div>  
</div>


<div class="container">
    <div class="section">
        <div class="row">
            <br>
            <h5 class="center">Últimas Noticias</h5>
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img src="{{ asset('img/home/convergencias.jpg') }}">
                  <span class="card-title">"Convergencias" 2015 Georgetown</span>
                </div>
                <div class="card-content">
                  <p>A space where mexican enthusiasts that live in the United States along with experts in various fields, converge in a forum of conversation about the most pertinent issues in México... </p>
                </div>
              </div>
            </div>
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img src="{{ asset('img/home/update.jpg') }}">
                  <span class="card-title">WTC CEO Update</span>
                </div>
                <div class="card-content">
                  <p>An amazing event of the World Trade Center having the CEO Update | Most of the countries assisted this year | #SelectQuerétaro | #InvestQueretaro</p>
                </div>
              </div>
            </div>
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img src="{{ asset('img/home/momento.jpg') }}">
                  <span class="card-title">Momento Histórico en Querétaro</span>
                </div>
                <div class="card-content">
                  <p>WMomento histórico donde WTC Querétaro conformado por Eduardo J. Franco y Carlos Uribe Menéndez y GRUPO MOMENTUM firman la alianza para un complejo WTC único en el mundo! </p>
                </div>
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
    <h3 class="center">Contáctanos</h3>
    {{ Form::open(array('files' => true, 'method' => 'POST')) }}
    <div class="row">
      <div class="input-field col s12 m6 offset-m3">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name',null,['class' => 'validate',  'required' => 'required']) !!}
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12 m3 offset-m3">
      {!! Form::label('email', 'Correo electrónico') !!}
      {!! Form::email('email',null,['class' => 'form-control validate', 'required']) !!}
      </div>
      <div class="input-field col s12 m3">
      {!! Form::label('phone', 'Teléfono') !!}
      {!! Form::text('phone',null,['class' => 'validate',  'required']) !!}
      </div>
    </div>

    <div class="row">
      <div class="col s12 m6 offset-m3">
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

@endsection
