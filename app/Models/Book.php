<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = [
        'title',
        'isbn',
        'description',
        'publisher_id'
    ];
    
    use HasFactory;

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }

    public function authors(){
        return $this->belongsToMany(Author::class);
    }
}
