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

// >>>>>>   OJO! Igual que el anterior.  Desde aquí tengo que llamar a la vista para que se muestra el último registro (categoría)
// public function index() {
//     $ads 
//     $ads= Ad::where('is_accepted', true)->define(ProductCategory::class, function (Faker $faker) {
//     return [
//         'title' => $faker->sentence(2),
//         'slug' => $faker->slug,
//         'description' => $faker->paragraph,
//         // Continua con el resto de las columnas
//     ];
// }

public function adsByCategory($name, $category_id)
<<<<<<< HEAD
    {
   /*  $category = Category::find($category_id);
    $ads = $category->ads()->where('is_accepted', true)->orderBy('created_at','desc')->take(1)
    ->get()
    ->paginate(5);
   
    return view('ads', compact ('category', 'ads'));
     */

    
     $category = Category::find($category_id);
     $ads = $category->ads()->where('is_accepted', true)->orderBy('created_at','desc')->paginate(5);
=======
    // {
    // $category = Category::find($category_id);
    // $ads = $category->ads()->where('is_accepted', true)->orderBy('created_at','desc')->paginate(5);
>>>>>>> 68ab2dbf74c2c9b7bd2df925c57bf947f7191dd6
   
     return view('ads', compact ('category', 'ads'));
     }

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
