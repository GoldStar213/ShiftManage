<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'viewState',
        'manager_id',
    ];

    /**
     * Get the manager that owns the Group
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function manager(): BelongsTo
    {
        return $this->belongsTo(Manager::class);
    }

    /**
     * Get all of the staffs for the Group
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function staffs(): HasMany
    {
        return $this->hasMany(Staff::class);
    }

    /**
     * Get all of the schedules for the Group
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }

    /**
     * Get all of the s_templates for the Group
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function s_templates(): HasMany
    {
        return $this->hasMany(ScheduleTemplate::class);
    }
}
