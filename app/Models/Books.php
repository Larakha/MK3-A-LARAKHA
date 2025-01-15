<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'writer',
        'user_id',
        'category_id',
        'publisher',
        'year',
    ];

    // relasi dengan tabel category
    public function category ()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // relasi dengan tabel user
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    
}