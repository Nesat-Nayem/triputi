<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';
    protected $fillable = [
        'uuid',
        'will_sand',
        'will_take',
        'date',
        'item_name',
        'category',
        'phone',
        'city',
        'area',
        'pincode',
        'qty',
        'transportation_fare',
        'filled_up',
        'receipt_charge',
        'we_attacked',
        'total',
        'billed_by',
        'status',
    ];




    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $lastUuid = self::max('uuid'); // Get the current highest value of uuid
                $model->uuid = $lastUuid ? $lastUuid + 1 : 3000; // Start at 3000 if no records exist
            }
        });
    }


    public function categoryRelation()
{
    return $this->belongsTo(Category::class, 'category'); // 'category' is the foreign key
}

    
}
