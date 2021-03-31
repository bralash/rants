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


class AdminController extends Controller
{
    public function index() {

        $episode = count(Episode::all());
        $season = Episode::max('season');
        return View('admin.index', compact(['episode','season']));
    }

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
}
