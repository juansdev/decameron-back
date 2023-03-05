<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static create(array $array)
 * @method static find(mixed $municipal_hotel_id)
 * @property false|mixed $status
 * @property mixed $id
 * @property mixed $address
 * @property mixed $number_rooms
 */
class MunicipalHotel extends Model
{
    use HasFactory;

    protected $table = 'municipal_hotels';

    protected $fillable = [
        'hotel_id',
        'municipality_id',
        'address',
        'number_rooms',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }

    public function municipality(): BelongsTo
    {
        return $this->belongsTo(Municipality::class);
    }

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }
}
