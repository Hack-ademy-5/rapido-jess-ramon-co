<?php

namespace App\Models;

use App\Models\Ad;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }
}
