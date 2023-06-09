<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Servicios extends Model
{
    use HasFactory;

    protected $table = "servicios";
    protected $fillable = ['tipo','nombre', 'estado'];
    protected $hidden = ['id'];


    public function DetalleServicioTratamiento(): BelongsTo
    {
        return $this->belongsTo(DetalleServicioTratamiento::class);
    }
}

