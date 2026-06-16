<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title','author','percent', 'description','library_id'];
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    public function library(){
        return $this->belongsTo(Library::class);
    }
}
