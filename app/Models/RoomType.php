<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @property false|mixed $status
 * @property mixed $id
 */
class RoomType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];
}
