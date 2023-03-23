<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class CardTemplate extends Model
{
    use HasFactory;

    protected $fillableo = [
        'id',
        'startTime',
        'endTime',
        'day',
        'staff_id',
    ];

    /**
     * Get the staff that owns the CardTemplate
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class);
    }
}
