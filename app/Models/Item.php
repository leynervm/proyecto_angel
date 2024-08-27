<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'cantidad',
        'price',
        'amount',
        'detalle',
        'service_id',
        'order_id'
    ];

    public function setDetalleAttribute($value)
    {
        $this->attributes['detalle'] = trim(mb_strtoupper($value, "UTF-8"));
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
