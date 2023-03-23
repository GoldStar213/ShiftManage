<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Manager extends Model
{
    use HasFactory;



    protected $fillable = [
        'id',
        'name',
        'accountId',
        'email',
        'password',
        'phoneNumber',
        'storeName',
        'industryPart',
        'postCode',
        'address',
        'buildingName',
        'map',
        'emailContact',
        'applicationCode',
        'licenseStatus',
        'freeStart_at',
        'paidStart_at',
        'freeEnd_at',
        'paidEnd_at'
    ];


    /**
     * Get all of the staffs for the Manager
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function staffs()
    {
        return $this->hasMany(Staff::class);
    }

    /**
     * Get all of the basicsettings for the Manager
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function basicsettings()
    {
        return $this->hasMany(BasicSetting::class);
    }

    /**
     * Get all of the groups for the Manager
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function groups()
    {
        return $this->hasMany(Group::class);
    }

    /**
     * Get all of the shifts for the Manager
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shifts()
    {
        return $this->hasMany(Shift::class);
    }

    /**
     * Get all of the s_templates for the Manager
     *
     * @return \Illuminate\DatScheduleTemplateloquent\Relations\HasMany
     */
    public function s_templates(): HasMany
    {
        return $this->hasMany(ScheduleTemplate::class);
    }

    /**
     * Get all of the schedules for the Manager
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }



    /**
     * Get all of the colors for the Manager
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function colors(): HasMany
    {
        return $this->hasMany(ColorSetting::class);
    }

    /**
     * Get all of the labors for the Manager
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function labors(): HasMany
    {
        return $this->hasMany(LaborSetting::class);
    }
}
