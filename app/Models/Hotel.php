<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static find(mixed $hotel_id)
 */
class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nit',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function municipalHotels(): HasMany
    {
        return $this->hasMany(MunicipalHotel::class);
    }
}
