<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    public function proyectos()
    {
        return $this->belongsTo(Proyecto::class, 'realiza', 'cliente_id', 'proyecto_id');
    }
}
