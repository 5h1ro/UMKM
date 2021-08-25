<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    public $table = 'sellers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'description',
        'address',
        'owner',
        'image',
        'facebook',
        'twitter',
        'instagram',
        'idProvince',
        'idCity',
        'idUser'
    ];

    public function item()
    {
        return $this->hasMany(Item::class, 'idSeller');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'idProvince');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'idCity');
    }
}
