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
        'idProvince',
        'idCity',
        'address',
        'idUser'
    ];

    public function item()
    {
        return $this->hasMany(Item::class, 'idSeller');
    }
}
