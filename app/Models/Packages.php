<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;

    protected $table = 'packages';
    protected $fillable = [
        'image',
        'title',
        'sub_title',
        'desc',
        'status',
    ];
}
