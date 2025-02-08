<?php

namespace App\Http\Controllers\Artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtistProductController extends Controller
{
    public function index(){
        return view('artist.product.create');
    }
    
    public function manage(){
        return view('artist.product.manage');
    }
}
