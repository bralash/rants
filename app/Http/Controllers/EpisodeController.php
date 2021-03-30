<?php

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use App\Models\Episode;

use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function index() {
        return Episode::all();
    }

    public function show(Episode $episode) {
        return $episode;
    }

    public function store(Request $request) {
        $guid = Episode::where('guid','=', $request->guid)->first();
        if($guid === null) {
            $episode = Episode::create($request->all());
            return response()->json($episode);
        }
        
        return response()->json($request->guid, 200);
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
