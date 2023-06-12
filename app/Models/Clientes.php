<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clientes extends Model
{
    use HasFactory;
    protected $table = "clientes";
    protected $fillable = ['nombres','apellidos','correo','mensaje'];
    protected $hidden = ['id'];


    public function reservas(): BelongsTo
    {
        return $this->belongsTo(reservas::class);
    }

    
}
