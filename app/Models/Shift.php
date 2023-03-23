<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Shift extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'star',
        'circle',
        'shiftDate',
        'memo',
        'manager_id',
    ];

    /**
     * Get the member that owns the Shift
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }
}
