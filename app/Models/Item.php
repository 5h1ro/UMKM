<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public $table = 'items';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'price',
        'condition',
        'weight',
        'idCategory',
        'detail',
        'sold',
        'idSeller'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'idCategory');
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class, 'idSeller');
    }

    public function order()
    {
        return $this->hasOne(Order::class, 'idItem');
    }
}
