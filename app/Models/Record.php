<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Record
 *
 * @property $id
 * @property $Description
 * @property $Date
 * @property $id_getins
 * @property $id_outputs
 * @property $created_at
 * @property $updated_at
 *
 * @property Getin $getin
 * @property Output $output
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Record extends Model
{
    
    static $rules = [
		'Description' => 'required',
		'Date' => 'required',
		'id_getins' => 'required',
		'id_outputs' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Description','Date','id_getins','id_outputs'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function getin()
    {
        return $this->hasOne('App\Models\Getin', 'id', 'id_getins');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function output()
    {
        return $this->hasOne('App\Models\Output', 'id', 'id_outputs');
    }
    

}
