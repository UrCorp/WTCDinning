@extends('site.templates.main')

@section('body-content')

<!-- [Portada] -->
<div class="wrapper" style="margin-top: -30px">
  <div id="index-banner" class="parallax-container valign-wrapper w3-display-container" style="height: 550px;">
    <img src="{{ asset('img/certification/trans-portada.png') }}" class="w3-display-middle" style="height: 550px; width: 100%">
    <img src="{{ asset('img/certification/certification-trans.png') }}" class="w3-display-right hide-on-small-only" style="height: 550px; width: 65%">
    <img src="{{ asset('img/certification/certification-trans.png') }}" class="w3-display-right hide-on-med-and-up" style="height: 550px; width: 100%">
    <div class="parallax valign-wrapper">
      <img src="{{ asset('img/certification/certification.jpg') }}" alt="">
    </div>
    <div class="w3-display-left hide-on-small-only" style="z-index: 11;margin: -90px 0 0 100px;">
      <a href="https://www.facebook.com/wtcqueretaro/" target="_blank" class="fa fa-facebook socialnav"></a>
      <a href="https://www.instagram.com/wtcqro/" target="_blank" class="fa fa-instagram socialnav" style="margin: 10px"></a>
      <a href="https://twitter.com/WTCQro" target="_blank" class="fa fa-twitter socialnav"></a>
    </div>
      <div class="caption left-align hide-on-small-only" style="z-index: 10; padding-left: 50%; ">
        <h3 class="light grey-text text-lighten-3"><b>WTC QRO CORPORATE CERTIFICATION</b></h3>
        <p>
          Increase productivity in your organization, transcending through human value, generating solvency
          and designing new innovation strategies.
        </p>
        <a class="waves-effect waves-light white w3-btn w3-padding-16" href="#mCertification" style="color: #f7984d">
          SCHEDULE NOW
        </a>
      </div>
      <!-- [Responsive] -->
      <div class="caption center-align hide-on-med-and-up" style="z-index: 100; padding: 4%; ">
        <h3 class="light grey-text text-lighten-3"><b>WTC QRO CORPORATE CERTIFICATION</b></h3>
        <p class="w3-justify">
          Increase productivity in your organization, transcending through human value, generating solvency
          and designing new innovation strategies.
        </p>
        <a class="waves-effect waves-light white w3-btn w3-padding-16" href="#modal1" style="color: #f7984d">
          SCHEDULE NOW
        </a>
      </div>
      <!-- End [Responsive] -->
  </div>
</div>
<!-- End [Portada] -->

<div class="container" style="z-index: -5; margin-top: 100px">
  <div class="w3-display-container" style="z-index: -5">
    <img src="{{ asset('img/certification/classroom.png') }}" style="width: 100%; z-index: -5">
    <div class="w3-display-topright w3-white hide-on-med-and-down" style="width: 50%; margin-right: 5%; margin-top: 25%">
      <div class="w3-card-4 w3-padding-32 w3-padding-large">
        <div class="w3-container" style="border-left: 12px solid #8cbde5;">
          <header>
            <h5 class="font-gray">TRANSCENDENCE</h5>
          </header>
          <p class="w3-justify letra-chica">Analyze ways in which you can be more productive and professional in your working
            relationships. Starting from a vision of how to develop the best version of yourself.
            Develop skills to communicate ideas, to do it clearly and understandable, generating
            an impact that transcend in others, based on a consistent leadership.
          </p>
        </div>
        <div class="w3-container" style="border-left: 12px solid #f9f15b;">
        <header>
          <h5 class="font-gray">SOLVENCY</h5>
        </header>
          <p class="w3-justify letra-chica">
            Develop skills and processes that are necessary to succeed in negotiating and selling.
            Identify the importance of the attitude that is shown in front of our clients and discover
            the best practices to generate new commercial relations.
          </p>
        </div>
        <div class="w3-container" style="border-left: 12px solid #434444;">
          <header>
            <h5 class="font-gray">INNOVATION</h5>
          </header>
          <p class="w3-justify letra-chica">
            Identify and promote the flow of ideas that will facilitate innovative processes that
            transform the possibilities into solutions.
          </p>
          <p class="w3-justify letra-chica">
            Implement tools that transform knowledge and perception about your organization, products
            and services into business strategies. Develop guidelines that help consistently influence
            and increase market share.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="w3-container hide-on-med-and-down" style="width: 40%; margin-top: 20px">
    <header>
      <h5 class="font-gray">WTC QRO CORPORATE CERTIFICATION</h5>
    </header>
    <p class="w3-justify font-gray " style="line-height: 1.5;">
      We help people find their potential through training and consulting programs, to develop skills
      by using tools and processes, promoting human talent, influencing positively in productivity
      and in the economy.
    </p>
    <a class="waves-effect waves-light white-text w3-btn w3-padding-16" href="#mCertification" style="background-color: #f7984d">
      SCHEDULE NOW
    </a>
  </div>
  <div class="w3-container hide-on-large-only" style="width: 100%; margin-top: 20px">
    <header>
      <h5 class="font-gray">WTC QRO CORPORATE CERTIFICATION</h5>
    </header>
    <p class="w3-justify font-gray " style="line-height: 1.5;">
      We help people find their potential through training and consulting programs, to develop skills
      by using tools and processes, promoting human talent, influencing positively in productivity
      and in the economy.
    </p>
    <a class="waves-effect waves-light white-text w3-btn w3-padding-16" href="#mCertification" style="background-color: #f7984d">
      SCHEDULE NOW
    </a>
  </div>
</div>
<div class="w3-container hide-on-med-and-down" style="height: 400px">

</div>
<div class="w3-white hide-on-large-only" style="margin: 5%">
  <div class="w3-card-4 w3-padding-32 w3-padding-large">
    <div class="w3-container" style="border-left: 12px solid #8cbde5;">
      <div class="w3-container">
        <header>
          <h5 class="font-gray">TRANSCENDENCE</h5>
        </header>
        <p class="w3-justify letra-chica">Analyze ways in which you can be more productive and professional in your working
          relationships. Starting from a vision of how to develop the best version of yourself.
          Develop skills to communicate ideas, to do it clearly and understandable, generating
          an impact that transcend in others, based on a consistent leadership.
        </p>
      </div>
    </div>
    <div class="w3-container" style="border-left: 12px solid #f9f15b;">
      <div class="w3-container">
      <header>
        <h5 class="font-gray">SOLVENCY</h5>
      </header>
        <p class="w3-justify letra-chica">
          Develop skills and processes that are necessary to succeed in negotiating and selling.
          Identify the importance of the attitude that is shown in front of our clients and discover
          the best practices to generate new commercial relations.
        </p>
      </div>
    </div>
    <div class="w3-container" style="border-left: 12px solid #434444;">
      <div class="w3-container">
        <header>
          <h5 class="font-gray">INNOVATION</h5>
        </header>
        <p class="w3-justify letra-chica">
          Identify and promote the flow of ideas that will facilitate innovative processes that
          transform the possibilities into solutions.
        </p>
        <p class="w3-justify letra-chica">
          Implement tools that transform knowledge and perception about your organization, products
          and services into business strategies. Develop guidelines that help consistently influence
          and increase market share.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- [Certification Modal] -->
  <div id="mCertification" class="modal modal-fixed-footer">
    {!! Form::open(['route' => 'site.contact.infocertification', 'method' => 'POST']) !!}
    <div class="modal-content">
      <div class="section">
        <img src="{{ asset('img/wtc-w.png') }}" class="" style="width: 10%; height: 10%">
        <button class="modal-close right btn-flat">X</button>
        <h5 class="center">Certification</h5>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('certification[name]', 'Name') !!}
          {!! Form::text('certification[name]',null,['class' => 'validate',  'required' => 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 m3 offset-m3">
          {!! Form::label('certification[email]', 'Mail') !!}
          {!! Form::email('certification[email]',null,['class' => 'form-control validate', 'required']) !!}
          </div>
          <div class="input-field col s12 m3">
          {!! Form::label('certification[phone]', 'Phone') !!}
          {!! Form::text('certification[phone]',null,['class' => 'validate',  'required']) !!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m6 offset-m3">
          {!! Form::label('certification[enterprise]', 'Enterprise') !!}
          {!! Form::text('certification[enterprise]',null,['class' => 'validate',  'required' => 'required']) !!}
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
<!-- End [Certification Modal] -->

@endsection
