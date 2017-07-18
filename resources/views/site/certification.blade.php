@extends('site.templates.main')

@section('body-content')

<!-- Portada -->
<div class="wrapper" style="margin-top: -30px">
  <div id="index-banner" class="parallax-container valign-wrapper w3-display-container" style="height: 550px;">
    <img src="{{ asset('img/certification/trans-portada.png') }}" class="w3-display-middle" style="height: 550px; width: 100%">
    <img src="{{ asset('img/certification/certification-trans.png') }}" class="w3-display-right" style="height: 550px; width: 70%">
    <div class="parallax valign-wrapper">
      <img src="{{ asset('img/certification/certification.jpg') }}" alt="">
    </div>
      <div class="caption left-align" style="z-index: 100; padding-left: 50%; ">
          <h5 class="light grey-text text-lighten-3"><b>Coworking Club</b></h5>
          <h6>¡Coming Soon!</h6>
          <a class="waves-effect waves-light white w3-btn grey-text text-darken-2 w3-padding-16" href="#modal1" >
            Shedule Now
          </a>
      </div>
      <div class="caption center-align hide-on-large-only">
      </div>
  </div>
</div>
<!-- End Portada -->

<div class="container" style="z-index: -5">
  <div class="w3-container" style="z-index: -5">
    <img src="{{ asset('img/certification/classroom.jpg') }}" style="width: 100%; height: 400px; z-index: -5">
  </div>
  <div class="w3-row">
    <div class="w3-col w3-container" style="width: 70%">
añkjfkfasaf
    </div>
    <div class="w3-rest w3-container" style="z-index: 10; /*margin-top: -30px">
      <div class="w3-card">

        <header class="w3-container">
          <h5 class="font-gray">Programa</h5>
        </header>

        <div class="w3-container">
          <p>1 new friend request</p>
          <ul>
  <li class="prueba">1</li>
  <li class="prueba active">4</li>
  <li class="prueba">5</li>
</ul>  
        </div>

      </div>
    </div>
  </div>
</div>

@endsection
