<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string postalcode
 * @property string streetname
 * @property string complement
 * @property string neighborhood
 * @property string city
 * @property string state
 * @property string ibgecode
 */

class Address extends Model
{
    protected $table = 'address';

    protected $fillable = ['postalcode', 'streetname', 'complement', 'neighborhood', 'city', 'state', 'ibgecode'];
}
