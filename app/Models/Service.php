<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'pricereferencial',
        'image'
    ];
    public $timestamps = false;


    public function setNameAttribute($value)
    {
        $this->attributes['name'] = trim(mb_strtoupper($value, "UTF-8"));
    }

    public function getImageURL()
    {
        return Storage::url('images/' . $this->image);
    }

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }
}
