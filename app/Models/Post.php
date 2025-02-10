<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $timestamp = false;
    protected $fillable = [
        'title',
        'image',
        'short_desc',
        'desc',
        'post_category_id'
    ];
    protected $primaryKey = 'id';
    protected $table = 'posts';

    public function category(){
        return $this->belongsTo(CategoryPost::class, 'post_category_id','id');
    }
}
