<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>[WTC] Informe | {{ $contact['name'] }}</title>
  <style media="screen">
    th{
      color: #b2b1b1;
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
        ¡Han pedido informes para venta o renta!
      </h2>
    </div>
    <hr style="width: 50%; margin-top: 20px">
    <div style="margin-top: 20px">
      <table width="80%" style="margin:auto">
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
            <td>{{ $contact['enterprise'] }}</td>
          </tr>
      </table>
    </div>
    <hr style="width: 50%; margin-top: 20px">
    <div style="margin-top:20px">
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
