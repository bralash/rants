<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Episode;
use App\Models\Mailing;
use DB;

class UIController extends Controller
{
    public function index() {

        $episodes = DB::table('episodes')->where('archive', '0')->orderBy('created_at', 'desc')->get();

        return View('ui.index',compact('episodes'));
    }


    public function addToMailing(Request $request) {
        $mail = new Mailing;
        $mail->email = $request->email;
        

        $mail->save();

        return View('ui.mail-thanks');
    }
}
