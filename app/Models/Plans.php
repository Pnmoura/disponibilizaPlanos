<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string planName
 * @property string label
 * @property string description
 * @property string typePlan
 */

class Plans extends Model
{
    protected $table = 'plans';

    protected $fillable = ['planName', 'label', 'description', 'typePlan'];
}
