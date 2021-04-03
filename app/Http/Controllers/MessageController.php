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
        
        $rant = new Message;
        $rant->message = $request->message;
        

        $rant->save();

        return View('thanks');
    }

    public function getMessages() {

        // if(Carbon::now()->dayOfWeek == 0) {
        //     // Archive all confessions on Sundays
        //     $updateDetails = [
        //         'archive' => '1'
        //     ];
            
    
        //     DB::table('messages')->update($updateDetails);
        // }

        

        $messages = DB::table('messages')->where('archive', '0')->orderBy('created_at', 'desc')->get();

        return View('messages',compact('messages'));
    }
}
