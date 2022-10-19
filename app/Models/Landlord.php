<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phn_number'
    ];

    public function renters()
    {
        return $this->hasMany(Renter::class);
    }
}
