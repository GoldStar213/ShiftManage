<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LaborSetting extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'startDate',
        'overRate',
        'lateRate',
        'confirmed',
        'manager_id',
    ];

    /**
     * Get the manager that owns the LaborSetting
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function manager(): BelongsTo
    {
        return $this->belongsTo(Manager::class);
    }
}
