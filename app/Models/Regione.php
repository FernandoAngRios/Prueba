<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Regione
 *
 * @property $id
 * @property $region
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Regione extends Model
{
    
    static $rules = [
		'region' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['region'];



}
