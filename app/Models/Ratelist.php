<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratelist extends Model
{
    use HasFactory;


    protected $table = 'ratelist'; 
    protected $fillable = [
        'particulars_name',
        'per_piece_rate',
        'status'
    ];
}
