<?php

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use App\Models\Episode;

use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function index() {
        return Episode::all('guid');
    }


    public function show(Episode $episode) {
        return $episode;
    }

    public function store(Request $request) { 
        $episode = Episode::create($request->all());
        return response()->json($episode);
        
    }

    public function update(Request $request, Episode $episode)
    {
        $episode->update($request->all());

        return response()->json($episode, 200);
    }

    public function delete(Request $request, Episode $episode)
    {
        $episode->delete();

        return response()->json(null, 204);
    }
}
