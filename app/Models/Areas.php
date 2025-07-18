<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    use HasFactory;


    protected $table = 'ares';
    protected $fillable = [
        'city_name',
        'area_name',
        'status',
    ];
}
