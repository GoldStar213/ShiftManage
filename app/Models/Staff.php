<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Staff extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'firstname_k',
        'lastname_k',
        'firstname_h',
        'lastname_h',
        'linkStatus',
        'nickname',
        'sex',
        'phonNumber',
        'email',
        'postcode',
        'address',
        'buildingName',
        'hourly',
        'transPrice',
        'staffCode',
        'memo',
        'leave',
        'leave_at',
        'group_id',
        'manager_id',
    ];
    /**
     * Get the group that owns the Staff
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    /**
     * Get the manager that owns the Staff
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function manager(): BelongsTo
    {
        return $this->belongsTo(Manager::class);
    }

    /**
     * Get all of the cards for the Staff
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }
}
