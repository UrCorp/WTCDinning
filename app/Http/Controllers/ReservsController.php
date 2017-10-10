<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;
use Mail;

class ReservsController extends Controller
{
    //
    public function reservations(Request $request) {
      $res = [
        'status' => 'ERROR_CONNECTION',
        'msg'    => 'Existe un error en la conexión <br/>¡Por favor, intente más tarde!'
      ];

      $id = $request->input('id');
      $email = $request->input('email');
      $contact = $request->input('reserv'.$id);

      //dd($email);
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
          $mail_sent_restaurant = Mail::send('site.emails.reserv', ['contact' => $contact], function ($m) use ($contact) {
            $m->from('web@wtcqueretaro.com', 'WTC');
            $m->replyTo($contact['email'], $contact['name']);
            $m->to($email, 'Partner');
            $m->subject('Reservación WTC');
          });

          $mail_sent_client = Mail::send('site.emails.reserv_client', ['contact' => $contact], function ($m) use ($contact) {
            $m->from('web@wtcqueretaro.com', 'WTC');
            $m->replyTo($email, 'Reservaciones WTC');
            $m->to($contact['email'], $contact['name']);
            $m->subject('WTC | Reservación');
          });

          $mail_sent_wtc = Mail::send('site.emails.reserv_wtc', ['contact' => $contact], function ($m) use ($contact) {
            $m->from('web@wtcqueretaro.com', 'WTC');
            $m->replyTo($contact['email'], $contact['name']);
            $m->to('eduardo.vera.pineda@gmail.com', 'Eduardo Vera');
            $m->subject('WTC | Developer');
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
