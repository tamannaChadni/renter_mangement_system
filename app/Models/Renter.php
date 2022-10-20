<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'renter_name',
        'phn_number',
        'floor',
        'flat_number',
        'NID',
        'advance_amount',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
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
