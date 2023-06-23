<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sector
 *
 * @property $id
 * @property $Name
 * @property $Description
 * @property $id_teachers
 * @property $created_at
 * @property $updated_at
 *
 * @property Career[] $careers
 * @property Center[] $centers
 * @property Room[] $rooms
 * @property Teacher $teacher
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sector extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'Description' => 'required',
		'id_teachers' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','Description','id_teachers'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function careers()
    {
        return $this->hasMany('App\Models\Career', 'id_sectors', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function centers()
    {
        return $this->hasMany('App\Models\Center', 'id_sectors', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rooms()
    {
        return $this->hasMany('App\Models\Room', 'id_sectors', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function teacher()
    {
        return $this->hasOne('App\Models\Teacher', 'id', 'id_teachers');
    }
    

}
