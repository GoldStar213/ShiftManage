<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Simulation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'goinTime',
        'gooutTime',
        'restinTime',
        'restoutTime',
        'overTime',
        'lateTime',
        'hourly',
        'commutPrice',
        'otherPrice',
        'date',
        'staff_id',
    ];

    /**
     * Get the staff that owns the Simulation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class);
    }
}
