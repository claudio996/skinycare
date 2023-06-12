<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reservas extends Model
{
    use HasFactory;
    protected $table = "reservas";
    protected $fillable = ['fecha', 'hora_id', 'clientes_id', 'tratamientos_id'];
    protected $hidden = ['id'];

    public function clientes(): HasMany
    {
        return $this->hasMany(clientes::class);
    }

    public function tratamientos(): HasMany
    {
        return $this->hasMany(tratamientos::class);
    }

    public function horas(): HasMany
    {
        return $this->hasMany(Horas::class);
    }
}
