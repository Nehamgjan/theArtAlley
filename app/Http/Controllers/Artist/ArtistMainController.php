<?php

namespace App\Http\Controllers\Artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtistMainController extends Controller
{
    public function index(){
        return view('artist.dashboard');
    }

    public function orderhistory(){
        return view('artist.orderhistory');
    }
}
