<?php

namespace App\Http\Controllers;
use App\Models\User;
use Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\Episode;
use App\Models\Segment;
use Carbon\Carbon;
use DB;

class AdminController extends Controller
{
    public function index() {

        $segment = count(Segment::all());
        $episode = count(Episode::all());
        $season = Episode::max('season');
        return View('admin.index', compact(['episode','season','segment']));
    }


    // Authentication Methods
    public function showLogin() {
        return View('admin.login');
    }

    public function login() {
        $rules = array(
            'email' => 'required|email',
            'password' => 'required|min:6'
        );

        $validator = Validator::make(Request::all(), $rules);
        if($validator->fails()) {
            return Redirect::to('/login')->withErrors($validator)
            ->withInput(Request::except('password'));
        } else {
            $userData = array(
                'email' => Request::get('email'),
                'password' => Request::get('password')
            );

            if(Auth::attempt($userData)) {
                return redirect('/');
            } else {
                return redirect('/login');
            }
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }



    public function episodes() {
        $episodes = Episode::where('archive', '0')->orderBy('posted_on', 'desc')->simplePaginate(5);
        $episodeCount = count(Episode::all());
        return View('admin.episodes',compact(['episodes','episodeCount']));
    }

    public function getEpisode($slug)
    {
        $segments = Segment::where('archive', '0')->orderBy('id', 'asc')->get();
        $episode = Episode::where('slug',$slug)->first();
        $episode->description = strip_tags($episode->description);
        $episode->posted_on = Carbon::createFromFormat('Y-m-d H:i:s', $episode->posted_on)->toFormattedDateString();
        
        return View('admin.episode-detail', compact(['episode','segments']));
    }

    public function confessions() {
        return View('admin.confessions');
    }
}
