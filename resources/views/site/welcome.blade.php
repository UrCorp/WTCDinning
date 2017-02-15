@extends('site.templates.main')

@section('body-content')
  
<div id="index-banner" class="parallax-container" style="height: 450px;">
  <div class="section no-pad-bot">
    <div class="container">
      <!--h1 class="header center white-text text-darken-1" style="text-shadow: 0px 0px 10px black, 0px 0px 10px black, 0px 0px 10px black, 0px 0px 10px black; margin-top: 60px;">Querétaro</h1-->
      <div class="row center">
        <!--h5 class="header col s12 light" style="text-shadow: 0px 0px 10px black, 0px 0px 10px black, 0px 0px 10px black, 0px 0px 10px black;">Querétaro</h5-->
        <!--img src="{{ asset('img/wtc-complete.png') }}" class="center light" style="padding-top: 100px"-->
      </div>
    </div>
    <div class="row center" style="background: rgba(255,255,255,0.5); width: 80%; border-radius: 20px; margin-top: 200px">
      <div class="input-field col s12 m8 l8">
        <input id="f_busqueda" type="text" class="validate">
        <label for="f_busqueda" style="color: black; font-size: 20px">Find a Restaurant</label>
      </div>
      <a href="#" class="btn-floating waves-effect waves-light red lighten-1" style="margin-top: 20px;margin-bottom: 20px;"><i class="material-icons">search</i></a>
      <a class="btn-floating btn waves-effect waves-light red lighten-1" style="margin-top: 20px;margin-bottom: 20px;"><i class="material-icons">location_on</i></a>
    </div>
  </div>
  <div class="parallax"><img src="{{ asset('img/banner1.jpg') }}" alt="Unsplashed background img 1"></div>
</div>


<div class="container">
  <div class="section">
  <div class="row s12 "><!--   Icon Section   -->

  <h4>Conoce nuestros socios</h4>
  @foreach($restaurants as $restaurant)
  <?php
    $name = 'name'.$restaurant->id;
    $email = 'email'.$restaurant->id; 
    $phone = 'phone'.$restaurant->id ;
    $date = 'date'.$restaurant->id ;
    $open_hour = ''.$restaurant->open_hour;
    $minute_open = ''.$restaurant->minute_open;
    $people = ''.$restaurant->people;
  ?>
   
    <div class="col s12 m6">
      <div class="card sticky-action">
        <div class="card-image waves-effect waves-block waves-light">
        <a class="btn-floating halfway-fab waves-effect waves-light green" style="z-index: 100"><i class="activator material-icons">add</i></a>
          <img class="activator" src="{{ asset('img/background1.jpg') }}">
          
        </div>

        <div class="card-content">
          <h4>{{ $restaurant->name }}</h4>
          <p>{{ $restaurant->adress }}</p>
          <p>{{ $restaurant->description }}</p>
          <div class="yellow-text"><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i></div>
          <div class="green-text">{{ $restaurant->start_day }} - {{ $restaurant->finish_day }}</div><div class="blue-text">{{ $restaurant->open_hour }} - {{ $restaurant->close_hour }}</div>
          <div class="chip">Internacional</div>
          |
          <div class="chip">Buffet</div>
          <div class="chip">Cortes</div>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">{{ $restaurant->name }}<i class="material-icons right">close</i></span>
          {!! Form::open(['route' => ['reservations.create', $restaurant->id], 'method' => 'POST'],['class' => 'col s6']) !!}
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              {!! Form::label($name, 'Nombre') !!}
              {!! Form::text($name, null,['class' => 'validate',  'required' => 'required']) !!}
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">message</i>
              {!! Form::label($email, 'Correo') !!}
              {!! Form::email($email,null,['class' => 'validate',  'required']) !!}
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">phone</i>
              {!! Form::label($phone, 'Teléfono') !!}
              {!! Form::text($phone,null,['class' => 'validate',  'required']) !!}
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">today</i>
              {!! Form::label($date, 'Fecha') !!}
              {!! Form::date($date,null,['class' => 'datepicker']) !!}
            </div>
          </div>
          <div class="row">

            <div class="col s1">                    
              <i class="material-icons prefix">schedule</i>
            </div>

            <div class="col s3">
              {!! Form::label('open_hour', 'Hora (24)') !!}
              {!! Form::number('open_hour', '12',['min' => 0,'max' => 23,'style' => 'text-align: right']) !!}
            </div>

            <div class="col s3">
              {!! Form::label('minute_open', 'Minuto') !!}
              {!! Form::number('minute_open', '00',['min' => 0,'max' => 59, 'step' => 30]) !!}
            </div> 

            <div class="col s1">                    
             <i class="material-icons prefix">recent_actors</i>
            </div>                   

            <div class="col s4">
              {!! Form::label('people', 'Personas') !!}
              {!! Form::number('people', '00',['min' => 0,'max' => 20]) !!}
            </div>

          </div>

          <div class="row">
            <div class="col s12 center">
              {!! Form::submit('Confirmar',['class' => 'btn blue darken-1', 'style' => 'margin: auto']) !!}
            </div>
          </div>
            {!! Form::close()!!}
        </div>

        <div class="card-action">
        <a class=" activator"><i class="material-icons">today</i> Reservar</a>
          <a href="https://www.google.com.mx/maps/place/La+Republica/@20.6005471,-100.3790418,18z/data=!4m5!3m4!1s0x0:0xfd08f90fe41fe74e!8m2!3d20.600958!4d-100.3793918" target="_blank" class="right"><i class="material-icons">location_on</i> Cómo llegar</a>
        </div>
      </div>
    </div>
  @endforeach  
  </div>
</div>
</div>

@endsection