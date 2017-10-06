<?php
/*
$contact['name'] = "Eduardo Vera";
$contact['email'] = "evera@urcorp.mx";
$contact['phone'] = "4423773581";
$contact['enterprise'] = "Web Developer";
*/
 ?>
 <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>[WTC] Audi | {{ $contact['name'] }}</title>
  <style media="screen">
    .titulos{
      color: #b2b1b1;
      font-weight: 100;
    }
    td{
      color: #818f95
    }
    h2{
      color: #b4bcbf
    }
    h3{
      color: #a8b2b5
    }
    hr.upshadow {
    	height: 10px;
    	border: 0;
      border-top-left-radius: 30px;
      border-top-right-radius: 30px;
    	box-shadow: 0 -5px 10px -5px #8c8b8b inset;
      width: 70%;
    }
    hr.downshadow {
    	height: 10px;
    	border: 0;
      border-bottom-left-radius: 30px;
      border-bottom-right-radius: 30px;
    	box-shadow: 0 5px 10px -5px #8c8b8b inset;
      width: 70%;
    }
  </style>
</head>
<body style="background-color: white;">
  <div style="width:80%; margin:auto; max-width:400px">
    <div style="width: 100%; text-align:center">
      <img src="http://wtcqueretaro.com/public/img/logos/wtc-letras-gris.png" title="WTC-Logo" style="width:100%; text-align: center; max-width:300px" />
    </div>
    <hr style="width: 50%; margin-top: 20px">
    <div style="margin-top:20px">
      <h2 style="text-align: center; color: #79888e">
        ¡Han pedido informes para la Audi!
      </h2>
    </div>
    <hr class="upshadow">
    <div style="margin-top: 20px">
      <table width="80%" style="margin:auto">
        <tr>
          <td class="titulos">Nombre:</td>
          <td>{{ $contact['name'] }}</td>
        </tr>
        <tr>
          <td class="titulos">Correo:</td>
          <td>{{ $contact['email'] }}</td>
        </tr>
        <tr>
          <td class="titulos">Teléfono:</td>
          <td>{{ $contact['phone'] }}</td>
        </tr>
        <tr>
          <td class="titulos">Empresa:</td>
          <td>{{ $contact['enterprise'] }}</td>
        </tr>
      </table>
    </div>
    <hr class="downshadow" style="margin-top:20px">
    <div >
      <div style="margin:auto">
        <h3>Excelente ahora es momento de...</h3>
        <p style="color:#a8b2b5">1.- Ponerte en contacto a la brevedad <br> 2.- Dar una asesoría completa sobre servicio y productos
          <br>3.- Concretar una cita presencial para detalles del negocio</p>
      </div>
    </div>
    <h3 align="center">¡ÉXITO EN TU NEGOCIACIÓN!</h3>
    <div style="margin-top:20px; color: gray;">
      <p style="font-family:helvetica,arial,sans-serif; text-align:justify; font-size:9px">
        Este correo electrónico y cualquiera de sus anexos podrían contener información confidencial. Si usted no es el destinatario, por el presente se le notifica que cualquier difusión y copiado de este correo electrónico y cualquiera de sus anexos o uso de su contenido por cualquier medio está estrictamente prohibido. Si usted recibió este correo electrónico equivocadamente o por error, por favor notifíquelo al remitente inmediatamente y cancele este correo electrónico y todos sus anexos de su ordenador (computadora).
      </p>
    </div>
  </div>
</body>
</html>
