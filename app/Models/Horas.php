<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Horas extends Model
{
    use HasFactory;

    protected $table = "horas";
    protected $fillable = ['hora'];
    protected $hidden = ['id'];

    public function reservas(): BelongsTo
    {
        return $this->belongsTo(reservas::class);
    }
}
