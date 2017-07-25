@extends('site.templates.main')

@section('body-content')

<!-- Portada -->
<div class="wrapper" style="margin-top: -30px">
  <div id="index-banner" class="parallax-container valign-wrapper w3-display-container" style="height: 550px;">
    <img src="{{ asset('img/certification/trans-portada.png') }}" class="w3-display-middle" style="height: 550px; width: 100%">
    <img src="{{ asset('img/certification/certification-trans.png') }}" class="w3-display-right" style="height: 550px; width: 65%">
    <div class="parallax valign-wrapper">
      <img src="{{ asset('img/certification/certification.jpg') }}" alt="">
    </div>
      <div class="caption left-align" style="z-index: 100; padding-left: 50%; ">
        <h3 class="light grey-text text-lighten-3"><b>LEAN SIX SIGMA</b></h3>
        <p>
          Improve operational performance by leveraging various tools to identify and eliminate defects.
          Our training has direct and tangible applications in almost manufacturing processes.
        </p>
        <a class="waves-effect waves-light white w3-btn w3-padding-16" href="#modal1" style="color: #f7984d">
          SCHEDULE NOW
        </a>
      </div>
      <div class="caption center-align hide-on-large-only">
      </div>
  </div>
</div>
<!-- End Portada -->

<div class="container" style="z-index: -5; margin-top: 100px">
  <div class="w3-display-container" style="z-index: -5">
    <img src="{{ asset('img/certification/classroom.png') }}" style="width: 100%; z-index: -5">
    <div class="w3-display-bottomright w3-white hide-on-med-and-down" style="width: 50%; margin-right: 5%; margin-bottom: -5%">
      <div class="w3-card-4 w3-padding-32 w3-padding-large">
        <div class="w3-container">
          <header>
            <h5 class="font-gray">Lean Six Sigma</h5>
          </header>
          <p class="w3-justify letra-chica">
            Lean Six Sigma Institute offers a broad range of training, consulting and assessment, where
            improved processes and unobstructed flow are essential elements for lowering costs and
            maintaining a competitive advantage.
          </p>
          <a class="waves-effect waves-light white-text w3-btn w3-padding-16" href="#modal1" style="background-color: #f7984d">
            SCHEDULE NOW
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container hide-on-small-only" style="margin-top: 5%; margin-bottom: 5%">
  <div class="w3-row-padding">
    <div class="w3-col s4 w3-container">
      <img src="{{ asset('img/lean6sigma/YB.jpg') }}" style="width: 100%">
      <p class="w3-justify font-gray letra-chica" style="position: relative;">
        Focuses on preparing individuals to develop efficient processes for fast delivery and consistent quality.
      </p>
    </div>
    <div class="w3-col s4 w3-container" >
      <img src="{{ asset('img/lean6sigma/GB.jpg') }}" style="width: 100%">
      <p class="w3-justify font-gray letra-chica">
        Green belts are agents of change trained in the methodologies of Lean Six Sigma, and as such, are capable
        of implementing high-impact projects.
      </p>
    </div>
    <div class="w3-col s4 w3-container">
      <img src="{{ asset('img/lean6sigma/BB.jpg') }}" style="width: 100%">
      <p class="w3-justify font-gray letra-chica">
        Black Belts are experts in Lean Six Sigma methodologies and dedicate much of their time implementing
        company improvements, leading key projects, and training or mentoring staff.
      </p>
    </div>
      <div class="w3-col s4 w3-container">
        <a href="#" class="w3-btn btnlean">See Calendar</a>
      </div>
      <div class="w3-col s4 w3-container" >
        <a href="#" class="w3-btn btnlean">See Calendar</a>
      </div>
      <div class="w3-col s4 w3-container">
        <a href="#" class="w3-btn btnlean">See Calendar</a>
      </div>
  </div>
</div>

<div class="container hide-on-med-and-up" style="margin-top: 5%">
  <div class="w3-row-padding">
    <div class="w3-col s12 w3-container">
      <img src="{{ asset('img/lean6sigma/YB.jpg') }}" style="width: 100%">
      <p class="w3-justify font-gray letra-chica" style="position: relative;">
        Focuses on preparing individuals to develop efficient processes for fast delivery and consistent quality.
      </p>
      <a href="#" class="w3-btn btnlean">See Calendar</a>
    </div>
    <div class="w3-col s12 w3-container" >
      <img src="{{ asset('img/lean6sigma/GB.jpg') }}" style="width: 100%">
      <p class="w3-justify font-gray letra-chica">
        Green belts are agents of change trained in the methodologies of Lean Six Sigma, and as such, are capable
        of implementing high-impact projects.
      </p>
      <a href="#" class="w3-btn btnlean">See Calendar</a>
    </div>
    <div class="w3-col s12 w3-container">
      <img src="{{ asset('img/lean6sigma/BB.jpg') }}" style="width: 100%">
      <p class="w3-justify font-gray letra-chica">
        Black Belts are experts in Lean Six Sigma methodologies and dedicate much of their time implementing
        company improvements, leading key projects, and training or mentoring staff.
      </p>
      <a href="#" class="w3-btn btnlean">See Calendar</a>
    </div>
  </div>
</div>

@endsection
