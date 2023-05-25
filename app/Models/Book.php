<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    //klo nama primary key/table-nya gak sesuai dgn aturan laravel
    //protected $table = "books";
    //protected $primaryKey = "id";

    public function Category(){
        return $this->belongsTo(Category::class, );

        //klo nama primary key/foreign key nya gak sesuai aturan laravel
        // return $this->hasOne(Category::class, "CategoriesID");
    }

    public function Detail(){
        return $this->hasOne(Detail::class);
    }
}
