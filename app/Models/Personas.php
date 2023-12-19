<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    use HasFactory;
    protected $table = 'personas';
    

    public function comunidad()
    {
        return $this->belongsTo(comunidades::class, "comunidad_id","id" );
    }
}
