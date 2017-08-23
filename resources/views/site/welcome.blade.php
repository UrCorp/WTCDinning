@extends('site.templates.main')

@section('body-content')

<div class="slider w3-container-display" style="margin-top: -30px;">
  <ul class="slides valign-wrapper">
    <li>
      <img src="{{ asset('img/home/slider/momentum.png') }}">
      <div class="center white-text w3-display-middle">
        <h4 class="condensed">PRE-SALE AND RENT</h4>
        <h6 class="light grey-text text-lighten-3"></h6>
        <p>Lease your office space or medical office.</p>
        <a class="waves-effect waves-light btn-large transparent sliderbtn" href="#mPresale">
          KNOW MORE <i class="fa fa-chevron-right " aria-hidden="true" style="font-size: 13px"></i>
        </a>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/home/slider/softlanding.png') }}">
      <div class="center white-text w3-display-middle">
        <h4 class="condensed">WTC QRO CERTIFICATION</h4>
        <h6 class="light grey-text text-lighten-3">Add Incremental Value to your organization.</h6>
        <a class="waves-effect waves-light btn-large transparent sliderbtn" href="Certification">
          Know How <i class="fa fa-chevron-right " aria-hidden="true" style="font-size: 13px"></i>
        </a>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/home/slider/zocalo.png') }}">
      <div class="center white-text w3-display-middle">
        <h4 class="condensed ligth">SOFTLANDING</h4>
        <h6 class="light grey-text text-lighten-3">Obtain guidance on unexplored markets, relocate your company or lower your production costs.</h6>
        <a class="waves-effect waves-light btn-large transparent sliderbtn" href="#mSoftlanding">
          SCHEDULE NOW <i class="fa fa-chevron-right " aria-hidden="true" style="font-size: 13px"></i>
        </a>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/home/slider/cestos.png') }}">
      <div class="center white-text w3-display-middle">
        <h4 class="condensed ligth">MEXICAN CRAFTS</h4>
        <h6 class="light grey-text text-lighten-3">Purchase beautiful products, handmade by Mexican artisans in our exlcusive online shop.</h6>
        <a class="waves-effect waves-light btn-large transparent sliderbtn" target="_blank" href="https://www.kichink.com/stores/kanpai">
          <i class="material-icons right">shop</i>
          Go Shopping
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
          <h2 class="light grey-text text-lighten-3"><b>Academics</b></h2>
          <h6>¡Coming Soon!</h6>
          <a class="waves-effect waves-light transparente w3-border w3-btn white-text w3-padding-16" href="Lean-SixSigma" style="margin-top:10px">
            Lean Six Sigma Certification
          </a><br>
          <a class="waves-effect waves-light transparente w3-border w3-btn white-text w3-padding-16" href="Certification" style="margin-top:10px">
            WTC QRO Corporate Certification
          </a><br>
          <a class="waves-effect waves-light transparente w3-border w3-btn white-text w3-padding-16" href="Lean-SixSigma" style="margin-top:10px">
            WTC QRO Transecendence Program
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
      <h3 class="grey-text text-darken-2 hide-on-med-and-down"><b>¡RECEIVE OUR LAST NEWS!</b></h3>
      <h6 class="grey-text text-darken-2 hide-on-large-only"><b>¡Receive our last news!</b></h5>
      <p class="grey-text text-darken-2">Become a part of the largest business network in the world. Subscribe to our Newsletter.</p>
          <a class="waves-effect waves-light w3-btn white-text w3-padding-16 grey darken-2" href="#mNewsletter" >
            SUBSCRIBE
          </a>
    </div>
</div>
<!-- End Newletter -->

<!-- WTC Landing -->
<div class="wrapper">
  <div id="index-banner" class="parallax-container valign-wrapper w3-display-container" style="height: 550px;">
    <img src="{{ asset('img/home/landing-trans.png') }}" class="w3-display-left " style="height: 550px; width: 60%">
    <div class="parallax valign-wrapper"><img src="{{ asset('img/home/landing.jpg') }}" alt="Landing"></div>
      <div class="caption left-align" style="padding-left: 10%; z-index: 100">
          <img src="{{ asset('img/home/wtc-landing.png') }}" width="50%">
          <br>
          <h5 class="light grey-text text-lighten-3">¡YOUR BUSSINESS FUTURE IS SAFE WITH US!</h5>
          <a class="waves-effect waves-light white w3-btn pink-text text-darken-2 w3-padding-16" href="#mSoftlanding" >
            LEARN MORE
          </a>
      </div>
      <div class="caption center-align hide-on-large-only">
      </div>
  </div>
</div>
<!-- End WTC Landing -->

<!-- Map -->
<div class="grey lighten-3" style="margin-top: -30px">
<h2 class="center grismomentum">Select your office or medical consulting room</h2 >
  <div class="">
    <iframe src="http://grupomomentum.com.mx/_renders/wtcq/v2/index-en.html" style="width:100%; height: 650px;" marginheight="0" frameborder=0 scrolling="no"></iframe>
  </div>
</div>
<!-- End Map -->

<!-- Dining -->
<div class="wrapper">
  <div id="index-banner" class="parallax-container valign-wrapper w3-display-container" style="height: 550px;">
    <img src="{{ asset('img/home/dining-trans.png') }}" class="w3-display-left " style="height: 550px; width: 60%">
    <div class="parallax valign-wrapper"><img src="{{ asset('img/home/dining.jpg') }}" alt="Unsplashed background img 1"></div>
      <div class="caption left-align" style="padding-left: 10%; z-index: 100">
        <h1 class="white-text">RESERVATIONS</h1>
        <p class="w3-justify" style="width:50%">Choose from a wide range of restaurants and diverse cuisines our culinary partners have to offer.</p>
        <a class="btn waves-effect waves-light white teal-text" href="Dining" >
          RESERVATIONS
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
      <h4 class="grismomentum">It will be a pleasure to work here</h4>
      <p class="grismomentum">Unique Ammenities in its type:</p>
      <ul class="grismomentum">
        <li>7 Meeting Rooms</li>
        <li>Padel Tennis Court</li>
        <li>Gym</li>
        <li>Roofed Pool</li>
        <li>Showers</li>
        <li>Steam Room</li>
        <li>Dinning Room</li>
        <li>Sky Garden</li>
        <li>Games Room</li>
      </ul>
      <p class="w3-justify grismomentum">Visit the exclusive medical and corporate Real Estate development <b>"World Trade Center"</b> where you have the best.</p>
      <p class="verdemomentum">Pre-Qualified MEES project, Sustainable Edification</p>
      <a class="w3-btn btnmomentum" href="">More Infomation</a>
      <a class="w3-btn btnmomentum" href="http://grupomomentum.com.mx/_renders/momentum-juriquilla/360/" target="_blank">Virtual Trial</a>
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
    <div class="parallax valign-wrapper"><img src="{{ asset('img/home/trade.jpg') }}" alt=""></div>
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
          <img src="{{ asset('img/home/socios/alterra.png') }}" width="100%" alt="">
      </div>
      <div class="col s12 m2">
          <img src="{{ asset('img/home/socios/momentum.png') }}" width="100%" alt="">
      </div>
      <div class="col s12 m2">
          <img src="{{ asset('img/home/socios/lumico.png') }}" width="100%" alt="">
      </div>
      <div class="col s12 m2">
          <img src="{{ asset('img/home/socios/goyen.png') }}" width="100%" alt="">
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
        <h3 class="center">Contact Us</h3>
        {{ Form::open(array('files' => true, 'method' => 'POST')) }}
        <div class="row">
          <div class="input-field col m10 offset-m1">
          {!! Form::text('name',null,['class' => 'validate',  'required' => 'required']) !!}
          {!! Form::label('name', 'Name') !!}
          </div>
        </div>

        <div class="row">
          <div class="col m5 offset-m1">
          {!! Form::label('email', 'Mail') !!}
          {!! Form::email('email',null,['class' => 'form-control validate', 'required']) !!}
          </div>
          <div class="col m5">
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
        <h5 class="center">Presale & Rent</h5>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('presale[name]', 'Name') !!}
          {!! Form::text('presale[name]',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 m3 offset-m3">
          {!! Form::label('presale[email]', 'Mail') !!}
          {!! Form::email('presale[email]',null,['class' => 'form-control validate', 'required']) !!}
          </div>
          <div class="input-field col s12 m3">
          {!! Form::label('presale[phone]', 'Phone') !!}
          {!! Form::text('presale[phone]',null,['class' => 'validate',  'required']) !!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('presale[enterprise]', 'Enterprise') !!}
          {!! Form::text('presale[enterprise]',null,['class' => 'validate',  'required' => 'required']) !!}
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
          {!! Form::label('newsletter[name]', 'Name') !!}
          {!! Form::text('newsletter[name]',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 m3 offset-m3">
          {!! Form::label('newsletter[email]', 'Mail') !!}
          {!! Form::email('newsletter[email]',null,['class' => 'form-control validate', 'required']) !!}
          </div>
          <div class="input-field col s12 m3">
          {!! Form::label('newsletter[phone]', 'Phone') !!}
          {!! Form::text('newsletter[phone]',null,['class' => 'validate',  'required']) !!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('newsletter[enterprise]', 'Enterprise') !!}
          {!! Form::text('newsletter[enterprise]',null,['class' => 'validate',  'required' => 'required']) !!}
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
<!-- End [Newsletter] -->

@endsection
