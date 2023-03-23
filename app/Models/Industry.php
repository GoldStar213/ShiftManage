<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Industry extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'industryName',
    ];

    /**
     * Get all of the parts for the Industry
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parts(): HasMany
    {
        return $this->hasMany(IndustryPart::class);
    }
}
