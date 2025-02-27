<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //use HasFactory;
    protected $primaryKey ='IdRol';
    protected $fillable=[
        'ModoUsuario',
    ];
    public $timestamps=false;
    public function Usuario(){
        return $this->hasMany('App\Models\User');
    }
}
