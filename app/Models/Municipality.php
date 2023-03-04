<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property mixed $name
 * @property mixed $code
 * @property bool|mixed $status
 * @property mixed $id
 * @method static create(array $array)
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
}
