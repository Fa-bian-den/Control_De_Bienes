<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Material
 *
 * @property $id
 * @property $Name
 * @property $Description
 * @property $Speciality
 * @property $Use
 * @property $Brand
 * @property $Amount
 * @property $created_at
 * @property $updated_at
 *
 * @property Getin[] $getins
 * @property Output[] $outputs
 * @property Room[] $rooms
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Material extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'Description' => 'required',
		'Speciality' => 'required',
		'Use' => 'required',
		'Brand' => 'required',
		'Amount' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','Description','Speciality','Use','Brand','Amount'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getins()
    {
        return $this->hasMany('App\Models\Getin', 'id_materials', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function outputs()
    {
        return $this->hasMany('App\Models\Output', 'id_materials', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rooms()
    {
        return $this->hasMany('App\Models\Room', 'id_materials', 'id');
    }
    

}
