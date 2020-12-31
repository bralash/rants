<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;
use DB;
use Carbon\Carbon;

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
        $updateDetails = [
            'archive' => '1'
        ];

        DB::table('messages')->where('created_at', '<=', Carbon::now()->subweek())->update($updateDetails);

        $messages = DB::table('messages')->where('archive', '0')->orderBy('created_at', 'desc')->get();

        return View('messages',compact('messages'));

        

        // print_r($rows);
    }
}
