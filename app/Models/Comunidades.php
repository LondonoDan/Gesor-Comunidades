<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunidades extends Model
{
    use HasFactory;
    protected $table = 'comunidades';

    public function personas()
    {
        return $this->hasMany(Personas::class, "comunidad_id", "id");
    }
}
