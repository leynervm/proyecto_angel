<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tracking extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['date', 'order_id', 'estado_id'];

    public function estado(): BelongsTo
    {
        return $this->belongsTo(Estado::class);
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
