<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Staff
 *
 * @property $id
 * @property $Names
 * @property $First Surname
 * @property $Second Surname
 * @property $Address
 * @property $Cellphone
 * @property $Age
 * @property $Sex
 * @property $Charge
 * @property $created_at
 * @property $updated_at
 *
 * @property Career[] $careers
 * @property Sector[] $sectors
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Staff extends Model
{
    
    static $rules = [
		'Names' => 'required',
		'First Surname' => 'required',
		'Second Surname' => 'required',
		'Address' => 'required',
		'Cellphone' => 'required',
		'Age' => 'required',
		'Sex' => 'required',
		'Charge' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Names','First Surname','Second Surname','Address','Cellphone','Age','Sex','Charge'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function careers()
    {
        return $this->hasMany('App\Models\Career', 'id_staffs', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sectors()
    {
        return $this->hasMany('App\Models\Sector', 'id_staffs', 'id');
    }
    

}
