<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicecategory extends Model
{
    use HasFactory;

    protected $table = 'servicecategory';
    protected $fillable = [
        'title',
        'status',
    ];
}
