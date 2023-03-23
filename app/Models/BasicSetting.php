<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BasicSetting extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'creationCycle',
        'startDate',
        'startTime',
        'endTime',
        'timeUnit',
        'startDay',
        'manager_id'
    ];


    /**
     * Get the manager that owns the basicsetting
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function manager(): BelongsTo
    {
        return $this->belongsTo(Manager::class);
    }
}
