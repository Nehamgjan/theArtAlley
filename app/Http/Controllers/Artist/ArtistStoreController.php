<?php

namespace App\Http\Controllers\Artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtistStoreController extends Controller
{
    public function index(){
        return view('artist.store.create');
    }
    
    public function manage(){
        return view('artist.store.manage');
    }
}
