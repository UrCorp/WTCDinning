@extends('site.templates.main')

@section('body-content')

<div class="slider w3-container-display" style="margin-top: -30px;">
  <ul class="slides valign-wrapper">
    <li>
      <img src="{{ asset('img/home/slider/momentum.jpg') }}">
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
      <img src="{{ asset('img/home/slider/bg-accelerator.png') }}">
      <div class="center white-text w3-display-middle">
        <h4 class="condensed">ACCELERATOR WTC</h4>
        <h6 class="light grey-text text-lighten-3">Add Incremental Value to your organization.</h6>
        <a class="waves-effect waves-light btn-large transparent sliderbtn" href="https://wtcqro.com/" target="_blank">
          Know How <i class="fa fa-chevron-right " aria-hidden="true" style="font-size: 13px"></i>
        </a>
      </div>
    </li>
  </ul>
  <button class="prev btn-flat white-text w3-display-left" style="z-index: 5; height: 50px; font-size: 36px">&#10094;</span></button>
  <button class="next btn-flat white-text w3-display-right" style="z-index: 5; height: 50px; font-size: 36px">&#10095;</button>
</div>

<!-- Academics-->
<div class="wrapper">
  <div id="Academics" class="parallax-container valign-wrapper w3-display-container" style="height: 550px;">
    <img src="{{ asset('img/home/academics-trans.png') }}" class="w3-display-right hide-on-small-only" style="height: 550px; width: 60%">
    <img src="{{ asset('img/home/academics-trans.png') }}" class="w3-display-right hide-on-med-and-up" style="height: 550px; width: 100%">
    <div class="parallax valign-wrapper"><img src="{{ asset('img/home/academics.jpg') }}" alt=""></div>
      <div class="caption left-align hide-on-small-only" style="z-index: 100; margin-left: 50%; width:40%">
        <img src="{{ asset('img/home/wtc-accelerator.png') }}" width="100%">
        <br>
          <a class="waves-effect waves-light transparente w3-border w3-btn white-text w3-padding-16" href="https://wtcqro.com/" target="_blank" style="margin-top:20px">
            WTC ACCELERATOR
          </a><br>
      </div>
      <div class="caption left-align hide-on-med-and-up" style="z-index: 100; margin: auto">
        <img src="{{ asset('img/home/wtc-accelerator.png') }}" width="100%">
          <a class="waves-effect waves-light transparente w3-border w3-btn white-text w3-padding-16" href="https://wtcqro.com/" target="_blank" style="margin-top:20px">
            WTC ACCELERATOR
          </a><br>
      </div>
  </div>
</div>
<!-- End Academics -->

<!-- Newsletter-->
<div id="Newsletter" style="background-color: #EBECEE; width:100%; height:300px" class="w3-display-container">
  <img src="{{ asset('img/home/newsletter.jpg') }}" width="100%" height="300px">
    <div class="w3-display-middle center">
      <h3 class="grey-text text-darken-2 hide-on-med-and-down"><b>¡Receive our lastest news!</b></h3>
      <h6 class="grey-text text-darken-2 hide-on-large-only"><b>¡Receive our lastest news!</b></h5>
      <p class="grey-text text-darken-2">Become a part of the largest business network in the world. Subscribe to our Newsletter.</p>
          <a class="waves-effect waves-light w3-btn white-text w3-padding-16 grey darken-2" href="#mNewsletter" >
            SUBSCRIBE
          </a>
    </div>
</div>

<!-- End Newsletter-->

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
      <p class="w3-justify grismomentum">Visit the exclusive medical and corporate Real Estate development <b>"World Trade Center Querétaro"</b> where you have the best.</p>
      <p class="verdemomentum">Pre-Qualified MEES project, Sustainable Edification</p>
      <a class="w3-btn btnmomentum" href="#mPresale">More Infomation</a>
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
    <h3 class="center">Our Allies</h3>
    <div class="row" style="width:90%">
      <div class="col s4 m2 offset-m1">
        <a href="https://aeromexico.com/en-us" target="_blank"><img src="{{ asset('img/home/aliados/aeromexico.png') }}" width="100%" alt=""></a>
      </div>
      <div class="col s4 m2">
        <!--a href="http://audicenterjuriquilla.com.mx" target="_blank"-->
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
        <!--a href="http://hotelnena.mx" target="_blank"-->
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
      <div class="caption left-align hide-on-small-only" style="z-index: 100; padding-left: 65%; padding-top: 5%">
          <img src="{{ asset('img/home/trade-wtc.png') }}" width="40%">
          <br>
          <h5 class="light grey-text text-lighten-3"><b>Coworking Club</b></h5>
          <h6>¡Coming Soon!</h6>
          <a class="waves-effect waves-light white w3-btn grey-text text-darken-2 w3-padding-16" href="#modal1" >
            Schedule Now
          </a>
      </div>
      <div class="caption center-align hide-on-med-and-up" style="padding: 15%; z-index: 100">
        <img src="{{ asset('img/home/trade-wtc.png') }}" width="50%">
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

<!-- [Partners] -->
<hr>
  <div class="w3-panle">
    <h3 class="center">Our Partners</h3>
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
        <h3 class="center">Contact Us</h3>
        {!! Form::open(['route' => 'site.contact.contact', 'id' => 'form-contact', 'method' => 'POST']) !!}
        <div class="row">
          <div class="form-group col s12 l10 offset-l1">
            {!! Form::label('contact[name]', 'Name *') !!}
            {!! Form::text('contact[name]', null, ['class' => 'validate form-control', 'maxlength' => 60, 'required' => 'required']) !!}
          </div>
          <div class="form-group col s12 l5 offset-l1">
            {!! Form::label('contact[email]', 'eMail *') !!}
            {!! Form::email('contact[email]', null, ['class' => 'form-control validate', 'maxlength' => 250, 'required' => 'required']) !!}
          </div>
          <div class="form-group col s12 l5">
            {!! Form::label('contact[phone]', 'Phone *') !!}
            {!! Form::text('contact[phone]', null, ['class' => 'form-control', 'pattern' => '^[0-9]{10,10}$', 'required' => 'required']) !!}
          </div>
          <div class="form-group col s12 l10 offset-l1">
            {!! Form::label('contact[message]', 'Message *') !!}
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
        {!! Form::submit('Subscribe',['class' => 'btn blue darken-1 center', 'style' => '']) !!}
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
          {!! Form::label('audi[name]', 'Name') !!}
          {!! Form::text('audi[name]',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 m3 offset-m3">
          {!! Form::label('audi[email]', 'Mail') !!}
          {!! Form::email('audi[email]',null,['class' => 'form-control validate', 'required']) !!}
          </div>
          <div class="input-field col s12 m3">
          {!! Form::label('audi[phone]', 'Phone') !!}
          {!! Form::text('audi[phone]',null,['class' => 'validate',  'required']) !!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('audi[enterprise]', 'Enterprise') !!}
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
          {!! Form::label('gp[name]', 'Name') !!}
          {!! Form::text('gp[name]',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 m3 offset-m3">
          {!! Form::label('gp[email]', 'Mail') !!}
          {!! Form::email('gp[email]',null,['class' => 'form-control validate', 'required']) !!}
          </div>
          <div class="input-field col s12 m3">
          {!! Form::label('gp[phone]', 'Phone') !!}
          {!! Form::text('gp[phone]',null,['class' => 'validate',  'required']) !!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('gp[enterprise]', 'Enterprise') !!}
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
          {!! Form::label('nena[name]', 'Name') !!}
          {!! Form::text('nena[name]',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 m3 offset-m3">
          {!! Form::label('nena[email]', 'Mail') !!}
          {!! Form::email('nena[email]',null,['class' => 'form-control validate', 'required']) !!}
          </div>
          <div class="input-field col s12 m3">
          {!! Form::label('nena[phone]', 'Phone') !!}
          {!! Form::text('nena[phone]',null,['class' => 'validate',  'required']) !!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('nena[enterprise]', 'Enterprise') !!}
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
<!--END [HELPERS:Modals] -->
@endsection
