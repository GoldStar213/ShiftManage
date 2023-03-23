<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class IndustryPart extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'partName',
        'industry_id',
    ];
    /**
     * Get the industry that owns the IndustryPart
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function industry(): BelongsTo
    {
        return $this->belongsTo(Industry::class);
    }
}
