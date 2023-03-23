<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ColorSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'confirmColor',
        'restColor',
        'patternName',
        'patternColor',
        'confirmed',
        'manager_id',
    ];

    /**
     * Get the manager that owns the ColorSetting
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function manager(): BelongsTo
    {
        return $this->belongsTo(Manager::class);
    }
}
