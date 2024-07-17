<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colaborador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nif', 'nombre',
    ];

    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class, 'proyecto_colaborador');
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }
}
