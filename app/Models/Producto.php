<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $name
 * @property $cantidad
 * @property $precio_unidad
 * @property $fecha_registro
 * @property $proveedor_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'name' => 'required',
		'cantidad' => 'required',
		'precio_unidad' => 'required',
		'fecha_registro' => 'required',
		'proveedor_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','cantidad','precio_unidad','fecha_registro','proveedor_id'];


    public function proveedore(){
      return $this->hasOne('App\Models\Proveedore','id','proveedor_id');
    }

}
