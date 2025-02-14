<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'title'
    ];
    protected $primaryKey = 'id';
    protected $table = 'category_posts';
}
