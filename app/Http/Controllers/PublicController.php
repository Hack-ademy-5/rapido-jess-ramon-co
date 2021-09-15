<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
public function index()
    {
        // Devuelve la vista HOME con los 5 primeros anuncios
        $ads = Ad::orderBy('created_at','desc')->take(6)->get();
        return view('home',compact('ads'));
    }


public function adsByCategory($name, $category_id)
    {
    $category = Category::find($category_id);
    $ads = $category->ads()->orderBy('created_at','desc')->paginate(5);
   
    return view('ads', compact ('category', 'ads'));
    }
}
