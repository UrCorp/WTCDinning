<div class="navbar-fixed" style="height: 30px">
  <nav style="z-index: 4; background-color: #444;" role="navigation" class="w3-container">
    <div class="nav-wrapper" style="">
      <ul>
        <li>
          <i style="font-size: 13px;" class="material-icons left white-text">phone</i>
          <span style="font-size: 13px;" class="white-text hide-on-med-and-down">+52 (1) 4421297663</span>
        </li>  
        <li>
          <a href="mailto:constacto@wtcqueretaro.com?Subject=Hola" target="_top">
            <i style="font-size: 13px;" class="material-icons left white-text">mail</i>
            <span class="white-text hide-on-med-and-down" style="font-size: 13px;">contacto@wtcqueretaro.com.mx</span>
          </a>
        </li> 
        <li>
          <a class="white-text" target="_blank" href="https://www.facebook.com/wtcqueretaro/">
            <i class="fa fa-facebook-f" style="font-size: 13px;"></i>
          </a>
        </li>
        <li>
          <a class="white-text" target="_blank" href="https://www.linkedin.com/in/wtcqueretaro/">
            <i class="fa fa-linkedin-square" style="font-size: 13px"></i>
          </a>
        </li>
        <li>
          <a class="white-text" target="_blank" href="https://www.instagram.com/wtcqro/">
            <i class="fa fa-instagram" style="font-size: 13px"></i>
          </a>
        </li>
      </ul>
      <a href="https://www.wtca.org/world-trade-center-queretaro" target="_blank">
        <img src="{{ asset('img/logos/wtc-association-blanco-nav.png') }}" class="w3-display-right">
      </a>
    </div>
  </nav>
</div>

<!-- Large menu -->
<div class="navbar-fixed hide-on-med-and-down" style="height: 0px">
  <nav class="white" style="z-index: 4; height: 100px;" role="navigation">
    <div class="nav-wrapper valign-wrapper w3-display-container" style="">
      <a href="Home"><img src="{{ asset('img/wtcmenu.png') }}" class="hide-on-med-and-down left" style="height: 50px"></a>

      <!-- Icons responsive menu -->
      <img src="{{ asset('img/wtc.png') }}" class="hide-on-large-only nav-logo" style="">
      <a href="#" data-activates="mobile-demo" class="button-collapse">
        <i class="material-icons">menu</i>
      </a>
      <!-- End icons responsive menu -->

      <ul class="hide-on-med-and-down condensed">
        <li class="">
          <a href="Home" class=">Home</a>
        </li>
        <li class="">
          <a class="dropdown-button" href="#" data-activates="dropdownAcademics">
            Academics<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li class="">
          <a class="dropdown-button" href="#" data-activates="dropdownConsultancy">
            Consultancy<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li class="">
          <a class="dropdown-button" href="#" data-activates="dropdownDiscover">
            Discover Querétaro<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li class="">
          <a class="dropdown-button" href="#" data-activates="dropdownRealEstate">
            Real Estate<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li class="">
          <a class="dropdown-button" href="#" data-activates="dropdownTrading">
            Trade<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>

<!-- Menú Academics -->
<ul id="dropdownAcademics" class="dropdown-content">
  <li class=""><a href="#!">WTC Certification</a></li>
  <li class="divider"></li>
  <li class=""><a href="#!">Lean Six Sigma</a></li>
  <li class="divider"></li>
  <li class=""><a href="#!">WTC University</a></li>
</ul>

<!-- Menú Consultancy -->
<ul id="dropdownConsultancy" class="dropdown-content">
  <li class=""><a href="#!">SoftLanding</a></li>
</ul>

<!-- Menú Discover -->
<ul id="dropdownDiscover" class="dropdown-content">
  <li class=""><a href="Dining">Dining</a></li>
  <li class="divider"></li>
</ul>

<!-- Menú Real Estate -->
<ul id="dropdownRealEstate" class="dropdown-content">
  <li class=""><a href="#!">Coworking</a></li>
  <li class="divider"></li>
  <li class=""><a href="http://grupomomentum.com.mx/project/world-trade-center-queretaro/" target="_blank">Offices</a></li>
</ul>

<!-- Menú Trading -->
<ul id="dropdownTrading" class="dropdown-content">
  <li class=""><a href="https://www.kichink.com/stores/kanpai" target="_blank">Commerce</a></li>
  <li class="divider"></li>
  <li class=""><a href="https://connectamericas.com/company/world-trade-center-queretaro" target="_blank">Connect Americas</a></li>
</ul>


<!-- Mobile menu -->
<div class="navbar-fixed hide-on-large-only" >
  <nav class="white" style="z-index: 4; height: 60px" role="navigation">
    <div class="nav-wrapper valign-wrapper" style="margin-top: auto;">
      <a href="#" data-activates="mobile-demo" class="button-collapse">
        <i class="material-icons">menu</i>
      </a>
      <img src="{{ asset('img/wtc.png') }}" class="hide-on-large-only" style="height: 39px; padding-left: 100px;">
    </div>
  </nav>
</div>

<!-- Collapsible menu -->
<ul class="side-nav collapsible" id="mobile-demo"  data-collapsible="accordion">
    
    <li><a href="Home">Home</a></li>
    <li>
        <div class="collapsible-header">Academics</div>
        <div class="collapsible-body">
            <a href="#!">WTC Certification</a>
            <a href="#!">Lean Six Sigma</a>
            <a href="#!">WTC University</a>
        </div>
    </li>
    <li>
        <div class="collapsible-header">Consultancy</div>
        <div class="collapsible-body">
            <a href="#!">Softlanding</a>
        </div>
    </li>
    <li>
        <div class="collapsible-header">Discover Querétaro</div>
        <div class="collapsible-body">
            <a href="Dining">Dining</a>
        </div>
    </li>
    <li>
        <div class="collapsible-header">Real Estate</div>
        <div class="collapsible-body">
            <a href="#!">Coworking</a>
            <a href="http://grupomomentum.com.mx/project/world-trade-center-queretaro/" target="_blank">Offices</a>
        </div>
    </li>
    <li>
        <div class="collapsible-header">Trade</div>
        <div class="collapsible-body">
          <a href="https://www.kichink.com/stores/kanpai" target="_blank">Commerce</a>
          <a href="https://connectamericas.com/company/world-trade-center-queretaro" target="_blank">Connect Americas</a>
        </div>
    </li>
</ul>