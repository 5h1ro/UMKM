<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $guarded = [];

    public function buyer()
    {
        return $this->hasMany(Buyer::class, 'idProvince');
    }

    public function seller()
    {
        return $this->hasMany(Seller::class, 'idProvince');
    }
}
