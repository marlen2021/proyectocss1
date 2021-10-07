<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    public $timestamps = false;
    protected $table = 'reservas';
    protected $fillable = ['habitacion_id', 'fecha_inicio', 'fecha_fin', 'huespedes', 'doc_cliente'];
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
    public function habitacion(){
        return $this->belongsTo(Habitacion::class);
    }
}