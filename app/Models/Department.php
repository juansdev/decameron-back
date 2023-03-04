<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $code
 * @property mixed $status
 * @property mixed $name
 */
class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];
}
