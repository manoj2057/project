<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'desc',
        'img',
        'author',
        'place',
        'category_id',
    ];
    protected $with = ['category'];
    public function category()
    {
        //hasone, hasmany,belongsTo,belongsTomany
        return $this->belongsTo(category::class);
    }
}
