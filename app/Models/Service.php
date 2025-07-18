<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = [
        'title',
        'slug',
        'category',
        'description',
        'video',
        'icon',
        'long_description',
        'image',
        'baner_img',
        'meta_title',
        'meta_tags',
        'meta_description',
        'status',
    ];
    public function get_Category()
    {
        return $this->belongsTo(Category::class, 'category');
    }
}
