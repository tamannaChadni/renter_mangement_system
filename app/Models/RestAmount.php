<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestAmount extends Model
{
    use HasFactory;
    protected $fillable = [
        'render_id',
        'owing_amount',
        'status'
    ];
    public function renter()
    {
        return $this->belongsTo(Renter::class);
    }
}
