<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Episode;
use App\Models\Mailing;
use App\Models\Segment;
use App\Models\Message;
use App\Models\Audio;
use App\Models\Contact;
use DB;
use Carbon\Carbon;

class UIController extends Controller
{

    public function episodeCleanUp($episodes) {
        foreach ($episodes as $episode) {
            $episode->description = strip_tags($episode->description);
            $episode->posted_on = Carbon::createFromFormat('Y-m-d H:i:s', $episode->posted_on)->toFormattedDateString();
        }
    }

    public function getCurrentSeasonEpisode($season,$episode) {
        $episodeData = Episode::where('season',$season)->where('episode', $episode)->first();
        if($episodeData === null) {
            return null;
        } else {
            return $episodeData;
        }
        
    }

    public function nextEpisode($season,$episode) {
        $episodeData = Episode::where('season','=',$season)->orderBy('posted_on','asc')->where('episode','>',$episode)->first();
        if($episodeData === null) {
            $season += 1;
            $episode = Episode::where('season',$season)->min('episode');
            return $this->getCurrentSeasonEpisode($season,$episode);
        } else {
            return $episodeData;
        }
    }

    public function previousEpisode($season, $episode) {
        $episodeData = Episode::where('season','=',$season)->orderBy('posted_on','desc')->where('episode','<',$episode)->first();
        if($episodeData == null) {
            $season -= 1;
            $lastEpisode = DB::table('episodes')->select('episode')->where('season',$season)->groupBy('episode')->get();
            $episode = count($lastEpisode);
            return $this->getCurrentSeasonEpisode($season,$episode);
        } else {
            return $episodeData;
        }
        
    }

    public function index() {

        $segment = count(Segment::all());
        $episodeCount = count(Episode::all());
        $season = Episode::max('season');

        $episodes = Episode::where('archive', '0')->orderBy('posted_on', 'desc')->paginate(5);
        $featured = Episode::where('featured', '1')->first();

        $this->episodeCleanUp($episodes);

        return View('ui.index',compact('episodes', 'featured','segment','episodeCount','season'));
    }


    public function addToMailing(Request $request) {
        $mail = new Mailing;
        $mail->email = $request->email;
        

        $mail->save();

        return View('ui.mail-thanks');
    }


    public function getEpisode($slug) {
        $seasons = DB::table('episodes')->select('season')->groupBy('season')->get();
        $segments = Segment::where('archive', '0')->orderBy('id', 'asc')->get();
        $episode = Episode::where('slug',$slug)->first();
        $episode->description = strip_tags($episode->description);
        $episode->posted_on = Carbon::createFromFormat('Y-m-d H:i:s', $episode->posted_on)->toFormattedDateString();

        $previous = $this->previousEpisode($episode->season,$episode->episode);
        $next = $this->nextEpisode($episode->season,$episode->episode);
        

        return View('ui.episode-detail', compact(['episode','segments','seasons','previous','next']));
    }


    public function episodes() {
        $seasons = DB::table('episodes')->select('season')->groupBy('season')->get();
        $segments = Segment::where('archive', '0')->orderBy('id', 'asc')->get();
        $episodes = Episode::where('archive', '0')->orderBy('posted_on', 'desc')->simplePaginate(5);
        $this->episodeCleanUp($episodes);
        
        return View('ui.episodes', compact(['episodes','segments','seasons']));
    }


    public function confession() {
        return View('ui.confession');
    }

    public function storeConfession(Request $request) {
        
        $confession = new Message;
        $confession->message = $request->input('message');
        

        $confession->save();

        return View('ui.confession-thanks');
    }


    public function contact() {
        return View('ui.contact');
    }

    public function donate() {
        return View('ui.donate');
    }

    public function getInTouch(Request $request) {
        $contact = new contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        return View('ui.contact-thanks');
    }

    public function seasons($id) {
        $title = 'Season ' . $id; 
        $seasons = DB::table('episodes')->select('season')->groupBy('season')->get();
        $segments = Segment::where('archive', '0')->orderBy('id', 'asc')->get();
        $episodes = Episode::where('archive', '0')->where('season',$id)->orderBy('posted_on', 'desc')->simplePaginate(5);
        $this->episodeCleanUp($episodes);
        
        return View('ui.season', compact(['episodes','segments','seasons', 'title']));
        
    }

    public function segment($slug) {
        $segments = Segment::where('archive', '0')->orderBy('id', 'asc')->get();
        $seasons = DB::table('episodes')->select('season')->groupBy('season')->get();
        $segment = Segment::where('archive','0')->where('slug',$slug)->first();
        $episodes = Episode::whereHas('segment', function($subQuery) use ($slug) {
            $subQuery->where('slug',$slug);
        })->orderBy('posted_on','desc')->simplePaginate(5);

        $this->episodeCleanUp($episodes);

        return View('ui.segment', compact(['episodes','segment','seasons','segments']));
    }
}
