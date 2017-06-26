@extends('site.templates.main')

@section('body-content')

<div class="slider w3-container-display" style="">
  <ul class="slides valign-wrapper">
    <li>
      <img src="{{ asset('img/home/slider/momentum.png') }}">
      <div class="caption center-align">
        <h4 class="condensed" style="padding-top: 90px">EXPLORE OUR NEW COMPLEX</h4>
        <h6 class="light grey-text text-lighten-3">We are pleased to give you a guided visit.</h6>
        <a class="waves-effect waves-light btn-large transparent bordered" style="border: solid 1px black; border-color: white" href="#modal1" >
          VISIT NOW <i class="fa fa-chevron-right " aria-hidden="true" style="font-size: 13px"></i>
        </a>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/home/slider/softlanding.png') }}">
      <div class="caption center-align">
        <h4 class="condensed" style="padding-top: 90px">WTC QRO CERTIFICATION</h4>
        <h6 class="light grey-text text-lighten-3">Generate internacional added value to your organization.</h6>
        <a class="waves-effect waves-light btn-large transparent" style="border: solid 1px black; border-color: white" href="#modal2">
          Know How <i class="fa fa-chevron-right " aria-hidden="true" style="font-size: 13px"></i>
        </a>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/home/slider/cestos.png') }}">
      <div class="caption center-align">
        <h4 class="condensed ligth" style="padding-top: 90px">MEXICAN CRAFTS</h4>
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
        <h4 class="condensed ligth" style="padding-top: 90px">SOFTLANDING</h4>
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
        <div class="col s12 m4">
          <div class="w3-card">
            <img src="{{ asset('img/home/a-certification.jpg') }}" alt="Norway" width="100%">
            <div class="w3-container white w3-padding">
              <h5 class="w3-center grey-text text-darken-2">WTC CERTIFICATION</h5>
              <p class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
              <a class="waves-effect waves-light grey darken-2 w3-button w3-block white-text" style="border: solid 1px black; border-color: white" href="#modal1" >
                INCRIBIRME
              </a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="w3-card">
            <img src="{{ asset('img/home/a-lean6sigma.jpg') }}" alt="Norway" width="100%">
            <div class="w3-container white w3-padding">
              <h5 class="w3-center grey-text text-darken-2">LEAN SIX SIGMA</h5>
              <p class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
              <a class="waves-effect waves-light grey darken-2 w3-button w3-block white-text" style="border: solid 1px black; border-color: white" href="#modal1" >
                INCRIBIRME
              </a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="w3-card">
            <img src="{{ asset('img/home/a-university.jpg') }}" alt="Norway" width="100%">
            <div class="w3-container white w3-padding">
              <h5 class="w3-center grey-text text-darken-2">WTC UNIVSERSITY</h5>
              <p class="w3-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
              <a class="waves-effect waves-light grey darken-2 w3-button w3-block white-text" href="#modal1" >
                INCRIBIRME
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
  <div id="index-banner" class="parallax-container valign-wrapper" style="height: 600px;">
    <div class="parallax valign-wrapper"><img src="{{ asset('img/home/landing.jpg') }}" alt="Unsplashed background img 1"></div>
      <div class="caption left-align hide-on-med-and-down" style="padding-left: 10%">
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
