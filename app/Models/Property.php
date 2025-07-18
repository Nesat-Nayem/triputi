<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;


    protected $table = 'property';
    protected $fillable = [
        'title',
        'slug',
        'status',
        'purpose',
        'location',
        'price',
        'location',
        'gallery',
        'thumbnail',
        'bedrooms',
        'property_type',
        'plot_category',
        'amenity',
        'bathrooms',
        'arrea',
        'furnished_status',
        'construction_age',
        'more_detail',
        'construction_age',
        'property_description',
        'additional_description',
        'meta_title',
        'category_type',
        'meta_tags',
        'meta_description',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'purpose');
    }



}
