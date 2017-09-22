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
          <a class="dropdown-button white-text" href="#" data-activates="dropdownAcademics" id="academics">
            Academia<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a class="dropdown-button white-text" href="#" data-activates="dropdownTrading" id="trade">
            Comercializadora<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a class="dropdown-button white-text" href="#" data-activates="dropdownRealEstate" id="real">
            Inmobiliario<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a class="dropdown-button white-text" href="#" data-activates="dropdownReservations" id="discover">
            Reservaciones<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a class="dropdown-button white-text" href="#" data-activates="dropdownServices" id="consultancy">
            Servicios<i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>

<!-- Nav Academia -->
<ul id="dropdownAcademics" class="dropdown-content">
  <li><a href="Certification">Certificación Corporativa WTC QRO</a></li>
  <li class="divider"></li>
  <li><a href="http://workshops.wtcqueretaro.com/ProductSubCats.aspx?SubCatID=22" target="_blank">Certificación Lean Six Sigma</a></li>
  <li class="divider"></li>
  <li><a href="#">Programa de Trascendencia WTC QRO</a></li>
</ul>

<!-- Nav Commerce -->
<ul id="dropdownTrading" class="dropdown-content">
  <li><a href="https://connectamericas.com/company/world-trade-center-queretaro" target="_blank">Connect Americas</a></li>
  <li class="divider"></li>
  <li><a href="https://www.kichink.com/stores/kanpai" target="_blank">Tienda en Línea</a></li>
</ul>

<!-- Nav Real State -->
<ul id="dropdownRealEstate" class="dropdown-content">
  <li><a href="http://grupomomentum.com.mx/_renders/momentum-juriquilla/360/" target="_blank">Oficinas</a></li>
  <li class="divider"></li>
  <li><a href="#WeTrade">We Trade Co-working</a></li>
</ul>

<!-- Nav Reservations -->
<ul id="dropdownReservations" class="dropdown-content">
  <li><a href="Dining">Restaurantes</a></li>
  <li class="divider"></li>
  <li><a href="http://hotelnena.mx">Hoteles</a></li>
</ul>

<!-- Nav Services -->
<ul id="dropdownServices" class="dropdown-content">
  <li><a href="#!">Softlanding</a></li>
  <li class="divider"></li>
  <li><a href="http://www.gp.org.mx/">Actuariales</a></li>
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
<!-- End Desktop navigation -->

<!-- Collapsible menu for movil -->
<ul class="side-nav collapsible" id="mobile-demo"  data-collapsible="accordion">

    <li><a href="Inicio">Inicio</a></li>
    <li>
        <div class="collapsible-header">Academia</div>
        <div class="collapsible-body">
            <a href="Certification">Certificación Corporativa WTC QRO</a>
            <a href="http://workshops.wtcqueretaro.com/ProductSubCats.aspx?SubCatID=22" target="_blank">Certificación Lean Six Sigma</a>
            <a href="#">Programa de Trascendencia WTC QRO</a>
        </div>
    </li>
    <li>
        <div class="collapsible-header">Comercializadora</div>
        <div class="collapsible-body">
          <a href="https://connectamericas.com/company/world-trade-center-queretaro" target="_blank">Connect Americas</a>
          <a href="https://www.kichink.com/stores/kanpai" target="_blank">Tienda en Línea</a>
        </div>
    </li>
    <li>
        <div class="collapsible-header">Inmobiliario</div>
        <div class="collapsible-body">
          <a href="http://grupomomentum.com.mx/_renders/momentum-juriquilla/360/" target="_blank">Oficinas</a>
          <a href="#WeTrade">We Trade Co-Working</a>
        </div>
    </li>
    <li>
        <div class="collapsible-header">Reservaciones</div>
        <div class="collapsible-body">
          <a href="Dining">Restaurantes</a>
          <a href="http://hotelnena.mx">Hoteles</a>
        </div>
    </li>
    <li>
        <div class="collapsible-header">Servicios</div>
        <div class="collapsible-body">
          <a href="#!">Softlanding</a>
          <a href="http://www.gp.org.mx/">Actuariales</a>
        </div>
    </li>
</ul>
<!-- End mobil navigation -->
