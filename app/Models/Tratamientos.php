<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Tratamientos extends Model
{
    use HasFactory;
    protected $table = "tratamientos";
    protected $fillable = ['nombre', 'n_sesiones', 'precio_Oferta', 'precioNormal', 'zona_id'];
    protected $hidden = ['id'];

    public function Zona () : HasMany {
        return $this->hasMany(Zona::class);

    }

    //Relationships Many to Many
    public function DetalleServicioTratamiento(): BelongsTo
    {
        return $this->belongsTo(DetalleServicioTratamiento::class);
    }
}
