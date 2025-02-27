<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hipotesis extends Model
{
    use HasFactory;
    protected $table='Hipotesis';
    protected $primaryKey ='id';
    protected $fillable=[
        'Detalles',
        'NroRegistro',
        'IdEvidencia',
    ];

    public $timestamps=false;
}
