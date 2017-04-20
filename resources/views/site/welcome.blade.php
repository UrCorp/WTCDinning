@extends('site.templates.main')

@section('body-content')
  
<div id="index-banner" class="parallax-container" style="height: 500px;">
  <div class="section no-pad-bot center">
    <nav style="width: 80%; border-radius: 15px; margin: auto" class=""> 
      <div class="nav-wrapper white" style="margin-top: 250px; border-radius: 15px;">
        <div class="input-field col s12 m8 l8"">
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
      @foreach($restaurant->images as $image)
      <a class="btn-floating halfway-fab waves-effect waves-light green" style="z-index: 100"><i class="activator material-icons">add</i></a>
      <img class="activator" src="{{ asset('img/restaurants/' . $image->name) }}">
      @endforeach
    </div>

    <div class="card-content">
      <h4>{{ $restaurant->name }}</h4><div class="chip">{{ $restaurant->categoria->name }}</div>
      <p>{{ $restaurant->adress }}</p>
      <p>{{ $restaurant->description }}</p>
      <div class="yellow-text"><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i></div>
      <div class="green-text">{{ $restaurant->start_day }} - {{ $restaurant->finish_day }}</div><div class="blue-text">{{ $restaurant->open_hour }} - {{ $restaurant->close_hour }}</div>
      
      @foreach($restaurant->tags as $tag)
        <div class="chip pink lighten-2 white-text">{{ $tag->name }}</div>
      @endforeach
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
      <a href="{{ $restaurant->link_maps }}" target="_blank" class="right"><i class="material-icons">location_on</i> Cómo llegar</a>
    </div>
  </div>
</div>
@endforeach  
</div>
</div>
</div>

@endsection
