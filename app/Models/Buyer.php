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

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }

    public function order()
    {
        return $this->hasOne(Order::class, 'idBuyer');
    }

    public const PAYMENT_CHANNELS = ['credit_card', 'mandiri_clickpay', 'cimb_clicks',
        'bca_klikbca', 'bca_klikpay', 'bri_epay', 'echannel', 'permata_va',
        'bca_va', 'bni_va', 'other_va', 'gopay', 'indomaret',
        'danamon_online', 'akulaku', ];

    public const EXPIRY_DURATION = 7;
    public const EXPIRY_UNIT     = 'days';

    public const CHALLENGE  = 'challenge';
    public const SUCCESS    = 'success';
    public const SETTLEMENT = 'settlement';
    public const PENDING    = 'pending';
    public const DENY       = 'deny';
    public const EXPIRE     = 'expire';
    public const CANCEL     = 'cancel';

    public const PAYMENTCODE = 'PAY';

    public const CREATED   = 'created';
    public const CONFIRMED = 'confirmed';
    public const DELIVERED = 'delivered';
    public const COMPLETED = 'completed';
    public const CANCELLED = 'cancelled';

    public const ORDERCODE = 'INV';

    public const PAID   = 'paid';
    public const UNPAID = 'unpaid';
}
