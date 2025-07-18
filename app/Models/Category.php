<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $fillable = [
        'title',
        'category_type',
        'type',
        'status',
    ];
    public function projects()
    {
        return $this->hasMany(Project::class);
    }



}
