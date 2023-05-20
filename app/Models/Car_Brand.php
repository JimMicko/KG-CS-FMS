<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car_Brand extends Model
{
    use HasFactory;

    public function carModels(): HasMany
    {
        return $this->hasMany(CarModel::class);
    }
}
