<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Episode;
use App\Models\Mailing;
use DB;

class UIController extends Controller
{
    public function index() {

        $episodes = Episode::where('archive', '0')->orderBy('id', 'asc')->paginate(5);
        $featured = Episode::where('featured', '1')->first();

        foreach ($episodes as $episode) {
            $episode->description = strip_tags($episode->description);
        }

        return View('ui.index',compact('episodes', 'featured'));
    }


    public function addToMailing(Request $request) {
        $mail = new Mailing;
        $mail->email = $request->email;
        

        $mail->save();

        return View('ui.mail-thanks');
    }
}
