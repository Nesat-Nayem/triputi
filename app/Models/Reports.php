<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;

    protected $table = 'reports';
    protected $fillable = [
        'uuid',
        'report_nub',
        'qty',
        'owner_name',
        'driver_name',
        'will_take',
        'item_info',
        'date',
        'particular_name',
        'village',
        'vihicle_number',
        'transport_fare',
        'filling_charge',
        'receipt_charge',
        'commission_a',
        'market_hamali_charge_b',
        'commission_taken_c',
        'advance_commission',
        'remaring_commission',
        'total',
        'parent',
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
}
