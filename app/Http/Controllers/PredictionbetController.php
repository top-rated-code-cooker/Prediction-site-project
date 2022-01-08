<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Predictionbet;
use App\Models\Round;

class PredictionbetController extends Controller
{
    //
    public function __construct() {
        
    }

    public function index() {
        
    }

    public function get_btc_rounds(Request $request) {
        $rounds = Round::where('predictionType', "=", 0)->orderBy('id','desc')->take(5)->get();
        return view('pages.btcusdt', ["rounds" => $rounds]);
    }

    public function get_eth_rounds(Request $request) {
        $rounds = Round::where('predictionType', "=", 1)->orderBy('id','desc')->take(5)->get();
    }

    public function get_bnb_rounds(Request $request) {
        $rounds = Round::where('predictionType', "=", 2)->orderBy('id','desc')->take(5)->get();
    }

}
