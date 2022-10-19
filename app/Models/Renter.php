<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{
    use HasFactory;

    protected $fillable = [
        'landlord_id',
        'renter_name',
        'phn_number',
        'floor',
        'flat_number',
        'NID',
        'advance_amount',
    ];

    public function landlord()
    {
        return $this->belongsTo(Landlord::class);
    }
    public function renter_deposit_receipt()
    {
        return $this->hasOne(RenterDepositReceipt::class);
    }
    public function rest_amount()
    {
        return $this->hasOne(RestAmount::class);
    }

}
