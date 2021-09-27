<?php

namespace App\Models;

use App\Models\User;
use App\Models\AdImage;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad extends Model
{
    use HasFactory;
    use Searchable;

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

    public function images()
    {
        return $this->HasMany(AdImage::class);
    }

    public function toSearchableArray()
    {
        $array = [
            'id'=>$this->id,
            'title'=>$this->title,
            'body'=>$this->body,
            'category'=>$this->category->name,
            'other'=>'ads ad',
        ];

        return $array;
    }
}

