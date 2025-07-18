<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogscategory extends Model
{
    use HasFactory;

    protected $table = 'blogscategory';
    protected $fillable = [
        'title',
        'status',
    ];
}
