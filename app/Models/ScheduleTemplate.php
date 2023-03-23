<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScheduleTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'startTime',
        'endTime',
        'day',
        'needNum',
        'group_id',
        'manager_id',
    ];

    /**
     * Get the group that owns the ScheduleTemplate
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    /**
     * Get the menager that owns the ScheduleTemplate
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function menager(): BelongsTo
    {
        return $this->belongsTo(Manager::class);
    }
}
