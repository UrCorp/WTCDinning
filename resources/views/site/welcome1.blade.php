@extends('site.templates.main')

@section('body-content')
  
<div id="index-banner" class="parallax-container" style="height: 500px;">
  <div class="section no-pad-bot center">
    <nav style="width: 80%; border-radius: 15px; margin: auto" class=""> 
      <div class="nav-wrapper white" style="margin-top: 250px; border-radius: 15px;">
        <div class="input-field col s12 m8 l8">
        {!! Form::open(['route(' =>'site.welcome]', 'method' => 'GET']) !!}
          <input id="search" type="search" placeholder="Restaurantes, tipo de cocina, comida..." name="search">
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        {!! Form::close() !!}
        </div>
      </div>
    </nav>
  </div>
  <div class="parallax"><img src="{{ asset('img/banner1.jpg') }}" alt="Unsplashed background img 1"></div>
</div>


<div class="container">
<div class="section">
<div class="row s12 "><!--   Icon Section   -->

<h4>Conoce nuestros socios</h4>

</div>
</div>
</div>

@endsection
