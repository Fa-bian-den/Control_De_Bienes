<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Room
 *
 * @property $id
 * @property $Name
 * @property $Address
 * @property $id_sectors
 * @property $id_materials
 * @property $created_at
 * @property $updated_at
 *
 * @property Career[] $careers
 * @property Material $material
 * @property Sector $sector
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Room extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'Address' => 'required',
		'id_sectors' => 'required',
		'id_materials' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','Address','id_sectors','id_materials'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function careers()
    {
        return $this->hasMany('App\Models\Career', 'id_rooms', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function material()
    {
        return $this->hasOne('App\Models\Material', 'id', 'id_materials');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sector()
    {
        return $this->hasOne('App\Models\Sector', 'id', 'id_sectors');
    }
    

}
