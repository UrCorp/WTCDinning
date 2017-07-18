<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>[WTC] Mensaje de contacto | {{ $contact['name'] }}</title>
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
  </style>
</head>
<body style="background-color: white; padding-top: 5%">
  <div style="width:60%; margin:auto">
    <div style="width: 100%; text-align:center">
      <img src="http://wtcqueretaro.com/public/img/logos/wtc-letras-gris.png" title="WTC-Logo" style="width:50%; text-align: center" />
    </div>
    <hr style="width: 50%; margin-top: 4%">
    <div style="margin-top:4%">
      <h1 style="text-align: center">
        Te haz puesto en contacto con los siguientes datos...
      </h1>
    </div>
    <hr style="width: 50%; margin-top: 4%">
    <div style="margin-top: 4%">
      <table width="60%" style="margin:auto">
        <tr>
          <th style="border-bottom: 2px solid;width;80%; text-align: left">Nombre</th>
          <th style="border-bottom: 2px solid;width;80%; text-align: left">Telefono</th>
        </tr>
        <tr>
          <td>{{ $contact['name'] }}</td>
          <td>{{ $contact['phone'] }}</td>
        </tr>
          <tr style="padding-top: 210px">
            <th style="border-bottom: 2px solid;width;80%; text-align: left">Correo</th>
            <th style="border-bottom: 2px solid;width;80%; text-align: left">Mensaje</th>
          </tr>
          <tr>
            <td>{{ $contact['email'] }}</td>
            <td>{{ $contact['message'] }}</td>
          </tr>
      </table>
    </div>
    <hr style="width: 50%; margin-top: 4%">
    <div style="margin-top:4%">
      <center>
        <h2 style=""> WTC Queretaro se comunicará a la brevedad.</h2>
        <h3><b>¡Gracias por ponerte en contacto!</b></h3>
      </center>
    </div>
    <div style="margin-top:4%; color: gray;">
      <p style="font-family:helvetica,arial,sans-serif; text-align:justify;">
        Este correo electrónico y cualquiera de sus anexos podrían contener información confidencial. Si usted no es el destinatario, por el presente se le notifica que cualquier difusión y copiado de este correo electrónico y cualquiera de sus anexos o uso de su contenido por cualquier medio está estrictamente prohibido. Si usted recibió este correo electrónico equivocadamente o por error, por favor notifíquelo al remitente inmediatamente y cancele este correo electrónico y todos sus anexos de su ordenador (computadora).
      </p>
    </div>
  </div>
</body>
</html>
