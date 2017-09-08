<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class VesselVisit extends Model
{
    use Notifiable;
    
    protected $table ='vesselvisits';
        
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idvesselvisits', 'visits', 'voyage', 'vesselname', 'idstaterow', 'hostname', 
    ];
        
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'created_at', 'updated_at'
    ];
}
