<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function index() {
        return View('index');
    }

    public function message(Request $request) {
        $rant = $request->message;

        $to_name = 'Rants and Confesstions';
        $to_email = 'rantsnconfess@gmail.com';
        $data = array("name" => "Rev. Father", "body" => $rant);

        Mail::send("emails.mail", $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Confession Entry');
            $message->from('no-reply@gmail.com','Anonymouse Message');
        });

        return View('thanks');
    }
}
