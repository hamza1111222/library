<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    protected $fillable = ['ISBN' , 'title' , 'price' , 'mortgage', 'category_id'];

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
}
