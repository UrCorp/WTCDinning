@extends('site.templates.main')

@section('body-content')
  
<div id="index-banner" class="parallax-container" style="height: 500px;">
  <div class="parallax"><img src="{{ asset('img/slider1.jpg') }}" alt="Unsplashed background img 1"></div>
</div>

<div class="grey lighten-4">
  <div class="container">
  <div class="section"></div>
  <div class="section"></div>
  <div class="section">
    <div class="row">
      <br>
      <div class="col s3">
        <div class="card">
          <div class="card-image">
            <img src="{{ asset('img/home/cardRealEstate.jpg') }}">
          </div>
        </div>
        <p class="promo-caption center">Real Estate</p>
        <p class="light center">Conóce el exclusivo complejo corporativo y médico, arropado por las áreas comerciales de mayor prestigio en el Bajío.</p>
      </div>
      <div class="col s3">
        <div class="card">
          <div class="card-image">
            <img src="{{ asset('img/home/cardActivosIntangibles.jpg') }}">
          </div>
        </div>
        <p class="promo-caption center">Activos Intangibles</p>
        <p class="light center">Nuestros expertos valuadores pueden ayudarte a incrementar el valor de tu empresa sin tener que gastar absolutmanete nada.</p>
      </div>
      <div class="col s3">
        <div class="card">
          <div class="card-image">
            <img src="{{ asset('img/home/cardSoftLanding.jpg') }}">
          </div>
        </div>
        <p class="promo-caption center">Softlanding</p>
        <p class="light center">WTC te guía paso a paso para establecer tu empresa en México, nos encargamos de todo para que tú te dediques a crecer tu negocio.</p>
      </div>
      <div class="col s3">
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
  <div class="parallax grey lighten-4"><img src="{{ asset('img/home/arcos.png') }}" alt="Unsplashed background img 1"></div>
</div>  
</div>


<div class="container">
    <div class="section">
        <div class="row">
            <br>
            <h5 class="center">Últimas Noticias</h5>
            <div class="col s4">
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
            <div class="col s4">
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
            <div class="col s4">
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

<div class="container">
  <div class="section">
    <h3 class="center">Contáctanos</h3>
    {{ Form::open(array('files' => true, 'method' => 'POST')) }}
    <div class="row">
      <div class="input-field col s6 offset-s3">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name',null,['class' => 'validate',  'required' => 'required']) !!}
      </div>
    </div>

    <div class="row center">
      <div class="input-field col s3 offset-s3">
      {!! Form::label('email', 'Correo electrónico') !!}
      {!! Form::email('email',null,['class' => 'form-control validate', 'required']) !!}
      </div>
      <div class="input-field col s3">
      {!! Form::label('phone', 'Teléfono') !!}
      {!! Form::text('phone',null,['class' => 'validate',  'required']) !!}
      </div>
    </div>

    <div class="row">
      <div class="col s6 offset-s3">
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
