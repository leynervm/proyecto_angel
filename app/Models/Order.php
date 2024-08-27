<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'date',
        'amount',
        'fechaentrega',
        'document',
        'name',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = trim(mb_strtoupper($value, "UTF-8"));
    }

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }
}
