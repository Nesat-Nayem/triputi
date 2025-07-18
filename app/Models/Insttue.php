<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insttue extends Model
{
    use HasFactory;


    protected $table = 'insttue';
    protected $fillable = [
        'icon',
        'title',
        'desc',
        'status',
    ];
}
