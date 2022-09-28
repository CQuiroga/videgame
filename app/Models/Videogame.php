<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    use HasFactory;

    protected $guarded = [];
    

    //Relación uno a muchos 

    public function category()
    {
        return $this->hasMany(Category::class);
    }

}
