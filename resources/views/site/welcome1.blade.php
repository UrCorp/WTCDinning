@extends('site.templates.main')

@section('body-content')
  
<div id="index-banner" class="parallax-container" style="height: 500px;">
  <div class="parallax"><img src="{{ asset('img/slider1.jpg') }}" alt="Unsplashed background img 1"></div>
</div>


<div class="container">
    <div class="section">
        <div class="row">
            <br>
            <h5 class="center">Explora World Trade Center Querétaro</h5>
            <div class="col s12 m3">
              <div class="card">
                <div class="card-image">
                  <img src="{{ asset('img/home/cardRealEstate.jpg') }}">
                  <span class="card-title">Real Estate</span>
                </div>
                <div class="card-content">
                  <p>Conoce el exclusivo complejo corporativo y médico, arropado por las áreas comerciales de mayour prestigio en el Bajío. </p>
                </div>
                <div class="card-action">
                  <a href="#">Saber Más</a>
                </div>
              </div>
            </div>
            <div class="col s12 m3">
              <div class="card">
                <div class="card-image">
                  <img src="{{ asset('img/home/cardActivosIntangibles.jpg') }}">
                  <span class="card-title">Activo Intangibles</span>
                </div>
                <div class="card-content">
                  <p>Nuestros expertos valuadores pueden ayudarte a incrementar el valor de tu empresa sin tener que gastar absolutamente nada.</p>
                </div>
                <div class="card-action">
                  <a href="#">Saber Más</a>
                </div>
              </div>
            </div>
            <div class="col s12 m3">
              <div class="card">
                <div class="card-image">
                  <img src="{{ asset('img/home/cardSoftLanding.jpg') }}">
                  <span class="card-title">Softlanding</span>
                </div>
                <div class="card-content">
                  <p>WTC te guía paso a paso para establecer tu empresa en México, nos encargamos de todo para que tú te dediques a crecer tu negocio.</p>
                </div>
                <div class="card-action">
                  <a href="#">Saber Más</a>
                </div>
              </div>
            </div>
            <div class="col s12 m3">
              <div class="card">
                <div class="card-image">
                  <img src="{{ asset('img/home/cardTradeMissions.jpg') }}">
                  <span class="card-title">Trade Missions</span>
                </div>
                <div class="card-content">
                  <p>Con acceso a la Red Global de World Trade Center nadie te podrá ofrecer mejores beneficios al hacer tu agenda de negocios.</p>
                </div>
                <div class="card-action">
                  <a href="#">Saber Más</a>
                </div>
              </div>
            </div>
      </div>
    </div>
</div>

<div class="conteiner">
    <div class="section">
        <div class="row">
            <h4 class="center">HABLEMOS DE NEGOCIOS</h4>
            <p class="col s6 offset-s3 center">World Trade Center es un plataforma global que promueve el comercio internacional, con una red de proveedores ubicadas en las ciudades más importantes del mundo.</p>
        </div>
        <div class="video-container">
        <!--iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe-->
        <iframe width="854" height="480" src="https://www.youtube.com/embed/cHr360f6naM" frameborder="0" allowfullscreen></iframe>
            
      </div>
    </div>
</div>
@endsection
