<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Career
 *
 * @property $id
 * @property $Name
 * @property $Description
 * @property $Schedule
 * @property $id_teachers
 * @property $id_sectors
 * @property $id_rooms
 * @property $created_at
 * @property $updated_at
 *
 * @property Room $room
 * @property Sector $sector
 * @property Teacher $teacher
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Career extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'Description' => 'required',
		'Schedule' => 'required',
		'id_teachers' => 'required',
		'id_sectors' => 'required',
		'id_rooms' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','Description','Schedule','id_teachers','id_sectors','id_rooms'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function room()
    {
        return $this->hasOne('App\Models\Room', 'id', 'id_rooms');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sector()
    {
        return $this->hasOne('App\Models\Sector', 'id', 'id_sectors');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function teacher()
    {
        return $this->hasOne('App\Models\Teacher', 'id', 'id_teachers');
    }
    

}
