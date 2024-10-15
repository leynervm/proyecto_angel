<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Estado extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'finish',
    ];
    public $timestamps = false;
    const FINISH = '1';


    public function setNameAttribute($value)
    {
        $this->attributes['name'] = trim(mb_strtoupper($value, "UTF-8"));
    }

    public function isFinish()
    {
        return $this->finish == self::FINISH;
    }

    public function trackings(): HasMany
    {
        return $this->hasMany(Tracking::class);
    }
}
