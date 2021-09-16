<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Ad extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Este Ad tiene relación con category y User (N a 1) . Se crea una columna en la bbdd user_id
    public function user()
      {
       return $this->belongsTo(User::class);
    }

    static public function ToBeRevisionedCount()
    {
        return Ad::where('is_accepted', null)->count();
    }
}

