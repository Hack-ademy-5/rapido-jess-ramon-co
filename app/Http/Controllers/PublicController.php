<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{

        // Devuelve la vista HOME con los 6 primeros anuncios
public function index() {
    $ads = Ad::where('is_accepted', true)
        ->orderBy('created_at', 'desc')
        ->take(6)
        ->get();
    return view('home', compact('ads'));
}



public function adsByCategory($name, $category_id)
  
        {
    $category = Category::find($category_id);
    $ads = $category->ads()->where('is_accepted', true)->orderBy('created_at','desc')->paginate(5);
   
    return view('ads', compact ('category', 'ads'));
    }

public function locale($locale)
    {
        session()->put('locale', $locale);
        return redirect()->back();
    }

}
