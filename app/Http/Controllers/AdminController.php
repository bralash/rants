<?php

namespace App\Http\Controllers;
use App\Models\User;
use Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    public function index() {
        return View('admin.index');
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
