<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'address',
        'city',
        'state',
        'zip_code',
        'district',
        'complement',
        'number'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}