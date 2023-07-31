<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer planId
 * @property integer addressId
 */
class AvailabilityPlans extends Model
{
    protected $table = 'availabilityPlans';

    protected $fillable = ['plan_id', 'address_id'];
}
