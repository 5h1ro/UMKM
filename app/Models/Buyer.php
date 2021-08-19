<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    public $table = 'buyers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'number',
        'idProvince',
        'idCity',
        'address',
        'idUser'
    ];

    public function city()
    {
        return $this->belongsTo(City::class, 'idCity');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'idProvince');
    }
}
