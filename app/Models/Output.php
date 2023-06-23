<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Output
 *
 * @property $id
 * @property $Date
 * @property $Description
 * @property $Cantidad
 * @property $id_materials
 * @property $created_at
 * @property $updated_at
 *
 * @property Material $material
 * @property Record[] $records
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Output extends Model
{
    
    static $rules = [
		'Date' => 'required',
		'Description' => 'required',
		'Cantidad' => 'required',
		'id_materials' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Date','Description','Cantidad','id_materials'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function material()
    {
        return $this->hasOne('App\Models\Material', 'id', 'id_materials');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function records()
    {
        return $this->hasMany('App\Models\Record', 'id_outputs', 'id');
    }
    

}
