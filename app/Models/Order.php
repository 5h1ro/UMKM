<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $table = 'orders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'code',
        'idBuyer',
        'idItem',
        'status',
        'link',
        'total'
    ];

    public function buyer()
    {
        return $this->belongsTo(Buyer::class, 'idBuyer');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'idItem');
    }
}
