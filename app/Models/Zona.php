<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Zona extends Model
{
    use HasFactory;
    protected $table = "zona";
    protected $fillable = ['nombre', 'estado'];
    protected $hidden = ['id'];

    public function Tratamientos(): BelongsTo
    {
        return $this->belongsTo(Tratamientos::class);
    }
}
