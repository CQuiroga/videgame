<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    

        //Relación uno a muchos inversa (Llave primaria)


    public function videogame()
    {
        
        return $this->belongsTo(Videogame::class);
    }


}
