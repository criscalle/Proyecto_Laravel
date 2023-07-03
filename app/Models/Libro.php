<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $id
 * @property $categoria
 * @property $nombre
 * @property $Autor
 * @property $id_editorial
 * @property $foto
 * @property $user
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    
    static $rules = [
		'categoria' => 'required',
		'nombre' => 'required',
		'Autor' => 'required',
		'id_editorial' => 'required',
		'foto' => 'required',
		'user' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['categoria','nombre','Autor','id_editorial','foto','user'];



}
