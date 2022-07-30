<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    use HasFactory;
    protected $fillable = ['peso', 'origen', 'destino', 'valor', 'bultos'];

    public function paquetes(){
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

}
