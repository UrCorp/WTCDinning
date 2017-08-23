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
          $m->subject('Informes de Ventas WTCQueretaro');
        });

        $mail_sent = Mail::send('site.emails.contact', ['contact' => $contact], function ($m) use ($contact) {
          $m->from('web@wtcqueretaro.com', 'WTC');
          $m->replyTo($contact['email'], $contact['name']);
          $m->to('curibe@wtcqueretaro.com', 'Ventas WTC');
          $m->subject('Informes de Ventas WTCQueretaro');
        });

        $mail_sent_client = Mail::send('site.emails.contact_client', ['contact' => $contact], function ($m) use ($contact) {
          $m->from('web@wtcqueretaro.com', 'WTC');
          $m->replyTo('ventas@wtcqueretaro.com', 'Ventas WTC');
          $m->to($contact['email'], $contact['name']);
          $m->subject('Cotización');
        });

        if ($mail_sent_momentum) {
          $res['status'] = 'SUCCESS';
          $res['msg'] = '¡Mensaje enviado!';
        }
      }
    }
    return redirect()->action('indexController@index');
  }

  public function presale(Request $request) {
    $res = [
      'status' => 'ERROR_CONNECTION',
      'msg'    => 'Existe un error en la conexión <br/>¡Por favor, intente más tarde!'
    ];

    $contact = $request->input('presale');

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

        $mail_sent = Mail::send('site.emails.presale', ['contact' => $contact], function ($m) use ($contact) {
          $m->from('web@wtcqueretaro.com', 'WTC');
          $m->replyTo($contact['email'], $contact['name']);
          $m->to('curibe@wtcqueretaro.com', 'Director WTC');
          $m->subject('WTC | Informe de Ventas');
        });

        $mail_sent_client = Mail::send('site.emails.presale_client', ['contact' => $contact], function ($m) use ($contact) {
          $m->from('web@wtcqueretaro.com', 'WTC');
          $m->replyTo('curibe@wtcqueretaro.com', 'Director WTC');
          $m->to($contact['email'], $contact['name']);
          $m->subject('WTC | Informe de Ventas');
        });

        if ($mail_sent) {
          $res['status'] = 'SUCCESS';
          $res['msg'] = '¡Mensaje enviado!';
        }
      }
    }
    return redirect()->action('indexController@index');
  }

  public function newsletter(Request $request) {
    $res = [
      'status' => 'ERROR_CONNECTION',
      'msg'    => 'Existe un error en la conexión <br/>¡Por favor, intente más tarde!'
    ];

    $contact = $request->input('newsletter');

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

        $mail_sent_Vera = Mail::send('site.emails.newsletter', ['contact' => $contact], function ($m) use ($contact) {
          $m->from('web@wtcqueretaro.com', 'WTC');
          $m->replyTo($contact['email'], $contact['name']);
          $m->to('eduardo.vera.pineda@gmail.com', 'Developer WTC');
          $m->subject('WTC | Newsletter');
        });

        $mail_sent = Mail::send('site.emails.newsletter', ['contact' => $contact], function ($m) use ($contact) {
          $m->from('web@wtcqueretaro.com', 'WTC');
          $m->replyTo($contact['email'], $contact['name']);
          $m->to('curibe@wtcqueretaro.com', 'Director WTC');
          $m->subject('WTC | Newsletter');
        });

        $mail_sent_client = Mail::send('site.emails.newsletter_client', ['contact' => $contact], function ($m) use ($contact) {
          $m->from('web@wtcqueretaro.com', 'WTC');
          $m->replyTo('curibe@wtcqueretaro.com', 'Director WTC');
          $m->to($contact['email'], $contact['name']);
          $m->subject('WTC | Newsletter');
        });

        if ($mail_sent) {
          $res['status'] = 'SUCCESS';
          $res['msg'] = '¡Mensaje enviado!';
        }
      }
    }
    return redirect()->action('indexController@index');
  }

  public function infocertification(Request $request) {
    $res = [
      'status' => 'ERROR_CONNECTION',
      'msg'    => 'Existe un error en la conexión <br/>¡Por favor, intente más tarde!'
    ];

    $contact = $request->input('certification');

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

        $mail_sent = Mail::send('site.emails.certification', ['contact' => $contact], function ($m) use ($contact) {
          $m->from('web@wtcqueretaro.com', 'WTC');
          $m->replyTo($contact['email'], $contact['name']);
          $m->to('svillarreal@wtcqueretaro.com', 'Certification WTC');
          $m->subject('WTC | Certification');
        });

        $mail_sent_client = Mail::send('site.emails.certification_client', ['contact' => $contact], function ($m) use ($contact) {
          $m->from('web@wtcqueretaro.com', 'WTC');
          $m->replyTo('svillarreal@wtcqueretaro.com', 'Certification WTC');
          $m->to($contact['email'], $contact['name']);
          $m->subject('WTC | Certification');
        });

        if ($mail_sent) {
          $res['status'] = 'SUCCESS';
          $res['msg'] = '¡Mensaje enviado!';
        }
      }
    }
    return redirect()->action('indexController@index');
  }

  public function test(Request $request) {
    $res = [
      'status' => 'ERROR_CONNECTION',
      'msg'    => 'Existe un error en la conexión <br/>¡Por favor, intente más tarde!'
    ];

    $contact = $request->input('certification');

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

        $mail_sent = Mail::send('site.emails.certification', ['contact' => $contact], function ($m) use ($contact) {
          $m->from('web@wtcqueretaro.com', 'WTC');
          $m->replyTo($contact['email'], $contact['name']);
          $m->to('eduardo.vera.pineda@gmail.com', 'Certification WTC');
          $m->subject('WTC | Developer');
        });

        $mail_sent_client = Mail::send('site.emails.certification_client', ['contact' => $contact], function ($m) use ($contact) {
          $m->from('web@wtcqueretaro.com', 'WTC');
          $m->replyTo('eduardo.vera.pineda@gmail.com', 'Certification WTC');
          $m->to($contact['email'], $contact['name']);
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
