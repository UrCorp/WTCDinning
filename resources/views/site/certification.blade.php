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

<div class="container" style="z-index: -5; margin-top: 100px">
  <div class="w3-container" style="z-index: -5">
    <img src="{{ asset('img/certification/classroom.png') }}" style="width: 100%; z-index: -5">
  </div>
  <div class="w3-row">
    <div class="w3-col w3-container" style="width: 40%">
      <p class="w3-justify">
        We help people find their potential through training and consulting programs, to develop skills
        by using tools and processes, promoting human talent, influencing positively in productivity
        and in the economy.
      </p>
    </div>
    <div class="w3-rest w3-container" style="z-index: 10; /*margin-top: -30px">
      <div class="w3-card">
        <header class="w3-container">
          <h5 class="font-gray">Blue Belt</h5>
        </header>
        <div class="w3-container">
          <div class="w3-cell-row">
            <div class="w3-container w3-red w3-cell w3-cell-middle" style="width: 10%">
              <p>1</p>
            </div>
            <div class="w3-container w3-green w3-cell" style="">
              <p class="w3-justify w3-tiny">Analyze ways in which you can be more productive and professional in your working
                relationships. Starting from a vision of how to develop the best version of yourself.
                Develop skills to communicate ideas, to do it clearly and understandable, generating
                an impact that transcend in others, based on a consistent leadership.
              </p>
            </div>
          </div>
        </div>
        <header class="w3-container">
          <h5 class="font-gray">Yellow Belt</h5>
        </header>
        <div class="w3-container">
          <div class="w3-cell-row">
            <div class="w3-container w3-red w3-cell w3-cell-middle" style="width: 10%">
              <p>2</p>
            </div>
            <div class="w3-container w3-green w3-cell" style="">
              <p class="w3-justify">
                Develop skills and processes that are necessary to succeed in negotiating and selling.
                Identify the importance of the attitude that is shown in front of our clients and discover
                the best practices to generate new commercial relations.
              </p>
            </div>
          </div>
        </div>
        <header class="w3-container">
          <h5 class="font-gray">Black Belt</h5>
        </header>
        <div class="w3-container">
          <div class="w3-cell-row">
            <div class="w3-container w3-red w3-cell w3-cell-middle" style="width: 10%">
              <p>2</p>
            </div>
            <div class="w3-container w3-green w3-cell" style="">
              <p class="w3-justify">
                Identify and promote the flow of ideas that will facilitate innovative processes that
                transform the possibilities into solutions.
              </p>
              <p>
                Implement tools that transform knowledge and perception about your organization, products
                and services into business strategies. Develop guidelines that help consistently influence
                and increase market share.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
