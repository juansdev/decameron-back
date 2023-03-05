<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property mixed $name
 * @property mixed $code
 * @property bool|mixed $status
 * @property mixed $id
 * @method static create(array $array)
 * @method static find(mixed $department_id)
 */
class Municipality extends Model
{
    use HasFactory;

    protected $table = 'municipalities';

    protected $fillable = [
        'department_id',
        'name',
        'code',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function municipalHotels(): HasMany
    {
        return $this->hasMany(MunicipalHotel::class);
    }
}
