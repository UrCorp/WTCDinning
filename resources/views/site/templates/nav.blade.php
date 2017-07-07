<div class="navbar-fixed" style="height: 30px">
  <nav style="z-index: 4;" role="navigation" class="w3-container z-depth-0 transparent hide-on-med-and-down" id="topnav">
    <div class="nav-wrapper" style="">
      <ul>
        <li class="hide-on-med-and-down">
          <a href="tel:4421297663" class="white-text">
            <i style="font-size: 13px;" class="material-icons left">phone</i>
            <span style="font-size: 13px;" class="hide-on-med-and-down">+52 (1) 4421297663</span>
          </a>
        </li>
          <li class="hide-on-large-only">
            <a href="tel:4421297663" class="white-text">
              <i style="font-size: 13px;" class="material-icons left">phone</i>
            </a>
          </li>
        <li>
          <a href="mailto:contacto@wtcqueretaro.com?Subject=Hola" target="_top" class="white-text">
            <i style="font-size: 13px;" class="material-icons left ">mail</i>
            <span class=" hide-on-med-and-down" style="font-size: 13px;">contacto@wtcqueretaro.com</span>
          </a>
        </li>
        <li>
          <a class="white-text" target="_blank" href="https://www.facebook.com/wtcqueretaro/">
            <i class="fa fa-facebook-f" style="font-size: 13px;"></i>
          </a>
        </li>
        <li>
          <a class="white-text" target="_blank" href="https://www.linkedin.com/in/wtcqueretaro/" class="white-text">
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
  <!--  -->
  <nav style="z-index: 4;" role="navigation" class="w3-container z-depth-0 transparent hide-on-large-only" id="topnav-movil">
    <div class="nav-wrapper" style="">
      <ul>
        <li>
          <a href="tel:4421297663" class="white-text">
            <i class="fa fa-phone" style="font-size: 13px;"></i>
          </a>
        </li>
        <li>
          <a href="mailto:contacto@wtcqueretaro.com?Subject=Hola" target="_top" class="white-text">
            <i class="fa fa-envelope-o" style="font-size: 13px;"></i>
          </a>
        </li>
        <li>
          <a class="white-text" target="_blank" href="https://www.facebook.com/wtcqueretaro/">
            <i class="fa fa-facebook-f" style="font-size: 13px;"></i>
          </a>
        </li>
        <li>
          <a class="white-text" target="_blank" href="https://www.linkedin.com/in/wtcqueretaro/" class="white-text">
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
<div class="navbar-fixed hide-on-med-and-down" style="height: 0; margin-top: 0px;">
  <nav class="transparent z-depth-0" style="z-index: 4; height: 70px;"  role="navigation" id="undernav">
    <div class="nav-wrapper valign-wrapper w3-display-container">
      <a href="Home">
        <img src="{{ asset('img/wtcmenu.png') }}" class="hide-on-med-and-down w3-display-left w3-hide logonav" id="logobn">
      </a>
      <a href="Home">
        <img src="{{ asset('img/logos/wtc-letras-blanco.png') }}" class="hide-on-med-and-down w3-display-left logonav" id="logocolor">
      </a>
      <!-- Icons responsive menu -->
      <img src="{{ asset('img/wtc.png') }}" class="hide-on-large-only nav-logo" style="">
      <a href="#" data-activates="mobile-demo" class="button-collapse">
        <i class="material-icons">menu</i>
      </a>
      <!-- End icons responsive menu -->

      <ul class="hide-on-med-and-down condensed w3-display-right">
        <li>
          <a href="Home" class="white-text" id="home">Home</a>
        </li>
        <li>
          <a class="dropdown-button white-text" href="#" data-activates="dropdownAcademics" id="academics">
            Academics<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a class="dropdown-button white-text" href="#" data-activates="dropdownConsultancy" id="consultancy">
            Consultancy<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a class="dropdown-button white-text" href="#" data-activates="dropdownDiscover" id="discover">
            Discover Querétaro<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a class="dropdown-button white-text" href="#" data-activates="dropdownRealEstate" id="real">
            Real Estate<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a class="dropdown-button white-text" href="#" data-activates="dropdownTrading" id="trade">
            Trade<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>

<!-- Menú Academics -->
<ul id="dropdownAcademics" class="dropdown-content">
  <li><a href="#!">WTC Certification</a></li>
  <li class="divider"></li>
  <li><a href="#!">Lean Six Sigma</a></li>
</ul>

<!-- Menú Consultancy -->
<ul id="dropdownConsultancy" class="dropdown-content">
  <li><a href="#!">SoftLanding</a></li>
</ul>

<!-- Menú Discover -->
<ul id="dropdownDiscover" class="dropdown-content">
  <li><a href="Dining">Dining</a></li>
  <li class="divider"></li>
</ul>

<!-- Menú Real Estate -->
<ul id="dropdownRealEstate" class="dropdown-content">
  <li><a href="#!">Coworking</a></li>
  <li class="divider"></li>
  <li><a href="http://grupomomentum.com.mx/project/world-trade-center-queretaro/" target="_blank">Offices</a></li>
</ul>

<!-- Menú Trading -->
<ul id="dropdownTrading" class="dropdown-content">
  <li><a href="https://www.kichink.com/stores/kanpai" target="_blank">Commerce</a></li>
  <li class="divider"></li>
  <li><a href="https://connectamericas.com/company/world-trade-center-queretaro" target="_blank">Connect Americas</a></li>
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
