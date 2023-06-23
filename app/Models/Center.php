<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Center
 *
 * @property $id
 * @property $Name
 * @property $Address
 * @property $Cellphone
 * @property $E_Mail
 * @property $Amount_Pavilions
 * @property $id_sectors
 * @property $created_at
 * @property $updated_at
 *
 * @property Sector $sector
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Center extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'Address' => 'required',
		'Cellphone' => 'required',
		'E_Mail' => 'required',
		'Amount_Pavilions' => 'required',
		'id_sectors' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','Address','Cellphone','E_Mail','Amount_Pavilions','id_sectors'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sector()
    {
        return $this->hasOne('App\Models\Sector', 'id', 'id_sectors');
    }
    

}
