<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>[WTC] Newsletter | {{ $contact['name'] }}</title>
  <style media="screen">
    th{
      color: #b2b1b1;
    }
    td{
      color: #818f95
    }
    h1{
      color: #79888e
    }
    h2{
      color: #b4bcbf
    }
    h3{
      color: #a8b2b5
    }
    .gris{
      color: #b2b1b1;
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
    <hr class="downshadow">
    <div style="margin-top:20px">
      <h2 style="text-align: center">
        ¡Se han suscrito al Newsletter!
      </h2>
    </div>
    <hr style="width: 50%; margin-top: 20px">
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
    <hr class="downshadow">
    <div style="margin-top:20px">
      <div style="margin:auto">
        <h4 class="gris">Excelente ahora es momento de...</h4>
        <p class="gris">1.- Registrarlo en una base de datos análoga <br> 2.- Agregarlo a una lista de mailing
          <br>3.- Darle la bienvenida</p>
      </div>
    </div>
    <div style="margin-top:20px; color: gray;">
      <p style="font-family:helvetica,arial,sans-serif; text-align:justify; font-size:9px">
        Este correo electrónico y cualquiera de sus anexos podrían contener información confidencial. Si usted no es el destinatario, por el presente se le notifica que cualquier difusión y copiado de este correo electrónico y cualquiera de sus anexos o uso de su contenido por cualquier medio está estrictamente prohibido. Si usted recibió este correo electrónico equivocadamente o por error, por favor notifíquelo al remitente inmediatamente y cancele este correo electrónico y todos sus anexos de su ordenador (computadora).
      </p>
    </div>
  </div>
</body>
</html>
