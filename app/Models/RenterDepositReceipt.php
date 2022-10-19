<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RenterDepositReceipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'render_id',
        'rent_amount',
        'water_bill',
        'gas_bill',
        'electricity_bill',
        'total_amount',
        'pay_amount',
        'owing_amount',
        'status'
    ];




    public function renter()
    {
        return $this->belongsTo(Renter::class);
    }
}
