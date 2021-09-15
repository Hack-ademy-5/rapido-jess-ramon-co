<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;

class PublicController extends Controller
{
 public function index()
    {
        // Devuelve la vista HOME con los 5 primeros anuncios
        $ads = Ad::orderBy('created_at','desc')->take(6)->get();
        return view('home',compact('ads'));
    }

}
