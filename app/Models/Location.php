<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;


    protected $table = 'location';
    protected $fillable = [
        'name',
        'country_id',
        'state_id',
        'type',
        'status',
    ];


    public function country()
    {
        return $this->belongsTo(Location::class, 'country_id', 'id');
    }


}
