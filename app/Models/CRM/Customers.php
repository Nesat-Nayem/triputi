<?php

namespace App\Models\CRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;



    protected $table = 'cusotmers';
    protected $fillable = [
        'name',
        'mobile',
        'dob',
        'audioPlayer_input',
        'delivery_date',
        'bill_number',
        'order_date',
        'salesman_code',
        'gst',
        'fabrics',
        'quantity',
        'amount',
        'total_quantity',
        'total_amount',
        'discount',
        'advance',
        'advance_date',
        'balance',
        'receive',
        'receive_date',
        'top_data',
        'bottom_data',
        'fabric_image',
        'note',
    ];



    public function cuttingQtys()
    {
        return $this->hasMany(Cutting_QTY::class, 'customer_id', 'id');
    }



}
