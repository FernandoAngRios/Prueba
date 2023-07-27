<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $name
 * @property $razon_social
 * @property $numero_proveedor
 * @property $fecha_registro
 * @property $rfc
 * @property $region_id
 * @property $logo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Proveedore extends Model
{
    
    static $rules = [
		'name' => 'required',
		'razon_social' => 'required',
		'numero_proveedor' => 'required',
		'fecha_registro' => 'required',
		'rfc' => 'required',
		'region_id' => 'required',
		'logo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','razon_social','numero_proveedor','fecha_registro','rfc','region_id','logo'];


    public function regione(){
      return $this->hasOne('App\Models\Regione','id', 'region_id' );
    }

}
