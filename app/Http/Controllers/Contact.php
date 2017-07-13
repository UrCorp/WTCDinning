<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;
use Mail;

class Contact extends Controller
{
  public function send(Request $request) {
    $res = [
      'status' => 'ERROR_CONNECTION',
      'msg'    => 'Existe un error en la conexión <br/>¡Por favor, intente más tarde!'
    ];

    $contact = $request->input('contact');

    if (isset($contact) and !empty($contact)) {

      $validation = Validator::make($contact, [
        'name'    => 'required|max:60',
        'email'   => 'required|email|max:250',
        'phone'   => 'required|regex:/^[0-9]{10,10}$/'
      ]);

      if ($validation->fails()) {
        $res['status'] = 'VALIDATION_ERROR';
        $res['msg'] = 'Error de validación<br/>¡Los datos introducidos son incorrectos!';
      } else {
        $mail_sent_momentum = Mail::send('site.emails.contact', ['contact' => $contact], function ($m) use ($contact) {
          $m->from('web@wtcqueretaro.com', 'WTC');
          $m->replyTo($contact['email'], $contact['name']);
          $m->to('ventas@grupomomentum.com.mx', 'Ventas Momentum');
          $m->subject('Inofrmes de Ventas WTCQueretaro');
        });

          $mail_sent = Mail::send('site.emails.contact', ['contact' => $contact], function ($m) use ($contact) {
            $m->from('web@wtcqueretaro.com', 'WTC');
            $m->replyTo($contact['email'], $contact['name']);
            $m->to('eduardo.vera.pineda@gmail.com', 'Ventas Momentum');
            $m->subject('Inofrmes de Ventas WTCQueretaro');
          });

        $mail_sent_client = Mail::send('site.emails.contact_client', ['contact' => $contact], function ($m) use ($contact) {
          $m->from('web@wtcqueretaro.com', 'WTC');
          $m->replyTo('ventas@wtcqueretaro.com', 'Ventas WTC');
          $m->to($contact['email'], $contact['name']);
          $m->subject('Cotización');
        });

        if ($mail_sent) {
          $res['status'] = 'SUCCESS';
          $res['msg'] = '¡Mensaje enviado!';
        }
      }
    }
    return redirect()->action('indexController@index');
  }
}
