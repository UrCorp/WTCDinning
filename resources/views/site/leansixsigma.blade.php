@extends('site.templates.main')

@section('body-content')

<!-- Portada -->
<div class="wrapper" style="margin-top: -30px">
  <div id="index-banner" class="parallax-container valign-wrapper w3-display-container" style="height: 550px;">
    <img src="{{ asset('img/certification/trans-portada.png') }}" class="w3-display-middle" style="height: 550px; width: 100%">
    <img src="{{ asset('img/lean6sigma/lean-trans.png') }}" class="w3-display-left hide-on-small-only" style="height: 550px; width: 65%">
    <img src="{{ asset('img/lean6sigma/lean-trans.png') }}" class="w3-display-left hide-on-med-and-up" style="height: 550px; width: 100%">
    <div class="parallax valign-wrapper">
      <img src="{{ asset('img/lean6sigma/lean.jpg') }}" alt="">
    </div>
    <div class="w3-display-right hide-on-small-only" style="margin: -90px 200px 0 0;">
      <a href="#" class="fa fa-facebook socialnav"></a>
      <a href="#" class="fa fa-instagram socialnav" style="margin: 10px"></a>
      <a href="#" class="fa fa-twitter socialnav"></a>
    </div>
      <div class="caption left-align hide-on-small-only" style="z-index: 100; padding-left: 5%; width: 40%">
        <h3 class="light grey-text text-lighten-3"><b>LEAN SIX SIGMA</b></h3>
        <p class="w3-justify">
          Improve operational performance by leveraging various tools to identify and eliminate defects.
          Our training has direct and tangible applications in almost manufacturing processes.
        </p>
        <a class="waves-effect waves-light white w3-btn w3-padding-16" href="#modal1" style="color: #f7984d">
          SCHEDULE NOW
        </a>
        <a class="waves-effect waves-light white w3-btn w3-padding-16" href="http://workshops.wtcqueretaro.com" style="color: #f7984d">
          WORKSHOPS
        </a>
      </div>
      <!-- Responsive -->
      <div class="caption center-align hide-on-med-and-up" style="z-index: 100; padding: 4%; ">
        <h3 class="light grey-text text-lighten-3"><b>LEAN SIX SIGMA</b></h3>
        <p class="w3-justify">
          Improve operational performance by leveraging various tools to identify and eliminate defects.
          Our training has direct and tangible applications in almost manufacturing processes.
        </p>
        <a class="waves-effect waves-light white w3-btn w3-padding-16" href="#modal1" style="color: #f7984d">
          SCHEDULE NOW
        </a>
        <a class="waves-effect waves-light white w3-btn w3-padding-16" href="http://workshops.wtcqueretaro.com" style="color: #f7984d">
          WORKSHOPS
        </a>
      </div>
      <!-- End Responsive -->
  </div>
</div>
<!-- End Portada -->

<div class="container" style="z-index: -5; margin-top: 100px">
  <div class="w3-display-container" style="z-index: -5">
    <img src="{{ asset('img/lean6sigma/table.jpg') }}" style="width: 100%; z-index: -5">
    <div class="w3-display-bottomright w3-white hide-on-med-and-down" style="width: 50%; margin-right: 5%; margin-bottom: -5%">
      <div class="w3-card w3-padding-32 w3-padding-large">
          <header>
            <h5 class="font-gray">Lean Six Sigma</h5>
          </header>
          <p class="w3-justify letra-chica">
            Lean Six Sigma Institute offers a broad range of training, consulting and assessment, where
            improved processes and unobstructed flow are essential elements for lowering costs and
            maintaining a competitive advantage.
          </p>
      </div>
    </div>
  </div>
</div>
<!-- START [CARD RESPONSIVE] -->
<div class="w3-white hide-on-large-only w3-margin-top" style="width: 90%; margin: auto;">
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
      <a class="waves-effect waves-light white-text w3-btn w3-padding-16" href="http://workshops.wtcqueretaro.com" style="background-color: #f7984d">
        WORKSHOPS
      </a>
    </div>
  </div>
</div>
<!-- END [CARD RESPONSIVE] -->

<!-- START [BELTS] -->
<div class="container hide-on-small-only" style="margin-top: 5%; margin-bottom: 5%">
  <div class="w3-row-padding">
    <div class="w3-col s4 w3-container">
      <div class="w3-display-container">
        <img src="{{ asset('img/lean6sigma/YB.jpg') }}" style="width: 100%">
        <div class="w3-display-middle" style="background-color: rgba(229, 211, 50, 0.8);position: absolute;width: 100%;height: 100%;"></div>
        <h5 class="w3-display-topleft" style="color: rgba(255, 255, 255, 0.9); font-weight:900; margin-left:15px;">Yellow Belt <br> Course </h5>
      </div>
      <p class="w3-justify font-gray letra-chica" style="position: relative;">
        Focuses on preparing individuals to develop efficient processes for fast delivery and consistent quality.
      </p>
    </div>
    <div class="w3-col s4 w3-container" >
      <div class="w3-display-container">
        <img src="{{ asset('img/lean6sigma/GB.jpg') }}" style="width: 100%">
        <div class="w3-display-middle" style="background-color: rgba(171, 208, 58, 0.8);position: absolute;width: 100%;height: 100%;"></div>
        <h5 class="w3-display-topleft" style="color: rgba(255, 255, 255, 0.9); font-weight:900; margin-left:15px;">Green Belt <br> Course </h5>
      </div>
      <p class="w3-justify font-gray letra-chica">
        Green belts are agents of change trained in the methodologies of Lean Six Sigma, and as such, are capable
        of implementing high-impact projects.
      </p>
    </div>
    <div class="w3-col s4 w3-container">
      <div class="w3-display-container">
        <img src="{{ asset('img/lean6sigma/BB.jpg') }}" style="width: 100%">
        <div class="w3-display-middle" style="background-color: rgba(0, 0, 0, 0.8);position: absolute;width: 100%;height: 100%;"></div>
        <h5 class="w3-display-topleft" style="color: rgba(255, 255, 255, 0.9); font-weight:900; margin-left:15px;">Black Belt <br> Course </h5>
      </div>
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
<!-- END [BELTS] -->
<!-- START [RESPONSIVE BELTS] -->
<div class="container hide-on-med-and-up" style="margin-top: 5%">
  <div class="w3-row-padding">
    <div class="w3-col s12 w3-container w3-section">
      <div class="w3-display-container">
        <img src="{{ asset('img/lean6sigma/YB.jpg') }}" style="width: 100%">
        <div class="w3-display-middle" style="background-color: rgba(229, 211, 50, 0.8);position: absolute;width: 100%;height: 100%;"></div>
        <h5 class="w3-display-topleft" style="color: rgba(255, 255, 255, 0.9); font-weight:900; margin-left:15px;">Yellow Belt <br> Course </h5>
      </div>
      <p class="w3-justify font-gray letra-chica" style="position: relative;">
        Focuses on preparing individuals to develop efficient processes for fast delivery and consistent quality.
      </p>
      <a href="#" class="w3-btn btnlean">See Calendar</a>
    </div>
    <div class="w3-col s12 w3-container w3-section" >
      <div class="w3-display-container">
        <img src="{{ asset('img/lean6sigma/GB.jpg') }}" style="width: 100%">
        <div class="w3-display-middle" style="background-color: rgba(171, 208, 58, 0.8);position: absolute;width: 100%;height: 100%;"></div>
        <h5 class="w3-display-topleft" style="color: rgba(255, 255, 255, 0.9); font-weight:900; margin-left:15px;">Green Belt <br> Course </h5>
      </div>
      <p class="w3-justify font-gray letra-chica">
        Green belts are agents of change trained in the methodologies of Lean Six Sigma, and as such, are capable
        of implementing high-impact projects.
      </p>
      <a href="#" class="w3-btn btnlean">See Calendar</a>
    </div>
    <div class="w3-col s12 w3-container w3-section">
      <div class="w3-display-container">
        <img src="{{ asset('img/lean6sigma/BB.jpg') }}" style="width: 100%">
        <div class="w3-display-middle" style="background-color: rgba(0, 0, 0, 0.8);position: absolute;width: 100%;height: 100%;"></div>
        <h5 class="w3-display-topleft" style="color: rgba(255, 255, 255, 0.9); font-weight:900; margin-left:15px;">Black Belt <br> Course </h5>
      </div>
      <p class="w3-justify font-gray letra-chica">
        Black Belts are experts in Lean Six Sigma methodologies and dedicate much of their time implementing
        company improvements, leading key projects, and training or mentoring staff.
      </p>
      <a href="#" class="w3-btn btnlean">See Calendar</a>
    </div>
  </div>
</div>
<!-- END [RESPONSIVE BELTS] -->


@endsection
