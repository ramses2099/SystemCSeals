<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class SealsCatogory extends Model
{
    use Notifiable;
    
    protected $table ='sealscatogory';
        
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'idsealscatogory', 'descripcion', 'idstaterow', 'hostname'
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
