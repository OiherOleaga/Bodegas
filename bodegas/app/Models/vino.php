<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vino
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $año
 * @property $alcohol
 * @property $tipo de vino
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vino extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'año' => 'required',
		'alcohol' => 'required',
		'tipo de vino' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','año','alcohol','tipo de vino'];



}
