<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Instrumento
 *
 * @property $id
 * @property $Nombre
 * @property $Familia
 * @property $Material
 * @property $País
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Instrumento extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Familia' => 'required',
		'Material' => 'required',
		'País' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Familia','Material','País'];



}
