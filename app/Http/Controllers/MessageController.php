<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;

class MessageController extends Controller
{
    public function index() {
        return View('index');
    }

    public function message(Request $request) {
        
        // $to_name = 'Rants and Confesstions';
        // $to_email = 'rantsnconfess@gmail.com';
        // $data = array("name" => "Rev. Father", "body" => $rant);

        // Mail::send("emails.mail", $data, function($message) use ($to_name, $to_email) {
        //     $message->to($to_email, $to_name)->subject('Confession Entry');
        //     $message->from('no-reply@gmail.com','Anonymouse Message');
        // });

        $rant = new Message;
        $rant->message = $request->message;
        

        $rant->save();

        return View('thanks');
    }

    public function getMessages() {
        $messages = Message::orderBy('created_at', 'desc')->get();

        // dd($categories[0]);
        // dd($categories[0]->subcategories);

        return View('messages',compact('messages'));
    }
}
