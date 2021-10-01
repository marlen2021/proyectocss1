<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Habitacion;

class Hotel extends Model
{
    protected $table= 'hoteles';
    
    public function habitaciones(){
        return $this->hasMany(habitacion::class);
    }
}
