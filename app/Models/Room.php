<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static create(array $validatedData)
 * @method static where(string $string, mixed $municipal_hotel_id)
 * @property false|mixed $status
 */
class Room extends Model
{
    use HasFactory;

    protected $table = 'municipal_hotels';

    protected $fillable = [
        'municipal_hotel_id',
        'room_type_id',
        'room_accommodation_id',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function municipalHotel(): BelongsTo
    {
        return $this->belongsTo(MunicipalHotel::class);
    }

    public function roomType(): BelongsTo
    {
        return $this->belongsTo(RoomType::class);
    }

    public function roomAccommodation(): BelongsTo
    {
        return $this->belongsTo(RoomAccommodation::class);
    }
}
