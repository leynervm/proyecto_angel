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

    public function trackings(): HasMany
    {
        return $this->hasMany(Tracking::class);
    }

    public function isFinish()
    {
        return $this->trackings()->whereHas('estado', function ($query) {
            $query->where('finish', Estado::FINISH);
        })->exists();

        // return $this->trackings()->get()->map(function ($tracking) {
        //     return $tracking->estado->isFinish() == true;
        // });
    }
}
