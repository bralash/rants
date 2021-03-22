<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use App\Models\Audio;
use DB;
use Carbon\Carbon;

class AudioController extends Controller
{
    public function store(Request $request) {
        $posts_music = new Audio;

        $music_file = Request::file('rant_audio');
        if(isset($music_file)) {
            $filename = $music_file->getClientOriginalName();
            $location = public_path('audio/'); 
            $music_file->move($location,$filename); 
            $posts_music->audio = $filename; 
            $posts_music->save();

            return View('thanks');
        }
    }



    public function getAudio() {
        $audios = DB::table('audio')->where('archive', '0')->orderBy('created_at', 'desc')->get();

        return View('audio',compact('audios'));
    }
}
