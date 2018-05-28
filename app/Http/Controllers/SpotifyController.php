<?php

namespace App\Http\Controllers;

use Arnobirchler\Curl\CurlService;
use Illuminate\Http\Request;


class SpotifyController extends Controller
{
    public function getResource(Request $request){
        $curl = new CurlService();
       $response = $curl->to('https://accounts.spotify.com/authorize')->withDatas(['client_id' => 'aae77a70cbfa476baeeb5a0ca92205d8'])->get();
       echo $response->content;
    }
}
