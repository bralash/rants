<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Feeds;

class UIController extends Controller
{
    public function index() {

        return View('ui.index');
    }
}
