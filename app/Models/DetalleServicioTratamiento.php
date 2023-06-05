<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DetalleServicioTratamiento extends Model
{
    use HasFactory;

    //Relationships Many to Many
    public function Tratamientos(): HasMany
    {
        return $this->hasMany(Tratamientos::class);
    }
    public function Servicios(): hasMany
    {
        return $this->hasMany(Servicios::class);
    }


}
