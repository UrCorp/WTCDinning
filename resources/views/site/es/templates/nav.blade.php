<div class="navbar-fixed" style="height: 30px">
  <!-- Little nav bar for desktop -->
  <nav style="z-index: 4;" role="navigation" class="w3-container z-depth-0 transparent hide-on-med-and-down" id="topnav">
    <div class="nav-wrapper">
      <ul>
        <li>
          <a href="tel:4421297663" class="white-text">
            <i style="font-size: 13px;" class="material-icons left">phone</i>
            <span style="font-size: 13px;">+52 (1) 4421297663</span>
          </a>
        </li>
        <li>
          <a href="mailto:contacto@wtcqueretaro.com?Subject=Hola" target="_top" class="white-text">
            <i style="font-size: 13px;" class="material-icons left ">mail</i>
            <span style="font-size: 13px;">contacto@wtcqueretaro.com</span>
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
      <div class="w3-display-right" style="margin-right: 15%; width: 16px;">
        <a href="#">
          <img src="{{ asset('img/nav/mx.png') }}" class="w3-display-right">
        </a>
      </div>
      <div class="w3-display-right" style="margin-right: 17%; width: 16px;">
        <a href="../">
          <img src="{{ asset('img/nav/uk.png') }}" class="w3-display-right">
        </a>
      </div>

      <a href="https://www.wtca.org/world-trade-center-queretaro" target="_blank">
        <img src="{{ asset('img/logos/wtc-association-blanco-nav.png') }}" class="w3-display-right">
      </a>
    </div>
  </nav>
  <!-- End little nav bar for desktop -->

  <!-- Little nav bar for mobil -->
  <nav style="z-index: 4;" role="navigation" class="w3-container z-depth-0 transparent hide-on-large-only" id="topnav-movil">
    <div class="nav-wrapper">
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
        <img src="{{ asset('img/logos/wtc-association-blanco-nav.png') }}" class="w3-display-right" style="width: 100px">
      </a>
    </div>
  </nav>
</div>

<!-- Nav menu -->
<!-- For desktop -->
<div class="navbar-fixed hide-on-med-and-down" style="height: 0; margin-top: 0px;">
  <nav class="transparent z-depth-0" style="z-index: 4; height: 70px;"  role="navigation" id="undernav">
    <div class="nav-wrapper valign-wrapper w3-display-container">
      <a href="Inicio">
        <img src="{{ asset('img/wtcmenu.png') }}" class="w3-display-left w3-hide logonav" id="logobn">
      </a>
      <a href="Inicio">
        <img src="{{ asset('img/logos/wtc-letras-blanco.png') }}" class="w3-display-left logonav" id="logocolor">
      </a>

      <ul class="condensed w3-display-right">
        <li>
          <a href="Inicio" class="white-text" id="home">Inicio</a>
        </li>
        <li>
          <a class="dropdown-button white-text" href="#" data-activates="dropdownRealEstate" id="real">
            Bienes Raíces<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a class="dropdown-button white-text" href="#" data-activates="dropdownAcademia" id="academics">
            Academia<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a class="dropdown-button white-text" href="#" data-activates="dropdownConsultoria" id="consultancy">
            Consultoría<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a class="dropdown-button white-text" href="#" data-activates="dropdownDiscover" id="discover">
            Descubre Querétaro<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a class="dropdown-button white-text" href="#" data-activates="dropdownTrading" id="trade">
            Intercambio<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>

<!-- Menú Academia -->
<ul id="dropdownAcademia" class="dropdown-content">
  <li><a href="Certification">Certificación WTC</a></li>
  <li class="divider"></li>
  <li><a href="Lean-Six-Sigma">Lean Six Sigma</a></li>
</ul>

<!-- Menú Consultoria -->
<ul id="dropdownConsultoria" class="dropdown-content">
  <li><a href="#!">Programa Softlanding</a></li>
</ul>

<!-- Menú Discover -->
<ul id="dropdownDiscover" class="dropdown-content">
  <li><a href="Dining">Reservaciones</a></li>
  <li class="divider"></li>
</ul>

<!-- Menú Bienes Raíces -->
<ul id="dropdownRealEstate" class="dropdown-content">
  <li><a href="#!">Aréa de Coworking</a></li>
  <li class="divider"></li>
  <li><a href="http://grupomomentum.com.mx/project/world-trade-center-queretaro/" target="_blank">Oficinas</a></li>
</ul>

<!-- Menú Trading -->
<ul id="dropdownTrading" class="dropdown-content">
  <li><a href="https://www.kichink.com/stores/kanpai" target="_blank">Commerce</a></li>
  <li class="divider"></li>
  <li><a href="https://connectamericas.com/company/world-trade-center-queretaro" target="_blank">Connect Americas</a></li>
</ul>


<!-- Mobile menu -->
<div class="navbar-fixed hide-on-large-only" style="height: 0px; margin-top: 0">
  <nav class="transparent z-depth-0" style="z-index: 4; height: 70px;" role="navigation" id="undernav-movil">
    <div class="nav-wrapper valign-wrapper w3-display-container">
      <a href="#" data-activates="mobile-demo" class="button-collapse w3-display-left">
        <i class="material-icons white-text" id="iconmenumovil">menu</i>
      </a>
      <a href="Inicio">
        <img src="{{ asset('img/logos/logomenumovil.png') }}" class="w3-display-middle w3-hide logonav" id="logobnmovil">
      </a>
      <a href="Inicio">
        <img src="{{ asset('img/logos/logomenumovilblanco.png') }}" class="w3-display-middle logonav" id="logocolormovil">
      </a>
      <div class="w3-display-right" style="margin-right: 10%; width: 16px;">
        <a href="#">
          <img src="{{ asset('img/nav/mx.png') }}" class="w3-display-right">
        </a>
      </div>
      <div class="w3-display-right" style="margin-right: 5%; width: 16px;">
        <a href="../">
          <img src="{{ asset('img/nav/uk.png') }}" class="w3-display-right">
        </a>
      </div>

    </div>
  </nav>
</div>

<!-- Collapsible menu -->
<ul class="side-nav collapsible" id="mobile-demo"  data-collapsible="accordion">

    <li><a href="Inicio">Inicio</a></li>
    <li>
        <div class="collapsible-header">Academia</div>
        <div class="collapsible-body">
            <a href="Certification">Certificación WTC</a>
            <a href="Lean-Six-Sigma">Lean Six Sigma</a>
        </div>
    </li>
    <li>
        <div class="collapsible-header">Consultoria</div>
        <div class="collapsible-body">
            <a href="#!">Programa Softlanding</a>
        </div>
    </li>
    <li>
        <div class="collapsible-header">Descubre Querétaro</div>
        <div class="collapsible-body">
            <a href="Dining">Reservaciones</a>
        </div>
    </li>
    <li>
        <div class="collapsible-header">Bienes Raíces</div>
        <div class="collapsible-body">
            <a href="#!">Aréa de Coworking</a>
            <a href="http://grupomomentum.com.mx/project/world-trade-center-queretaro/" target="_blank">Oficinas</a>
        </div>
    </li>
    <li>
        <div class="collapsible-header">Intercambio</div>
        <div class="collapsible-body">
          <a href="https://www.kichink.com/stores/kanpai" target="_blank">Commerce</a>
          <a href="https://connectamericas.com/company/world-trade-center-queretaro" target="_blank">Connect Americas</a>
        </div>
    </li>
</ul>
