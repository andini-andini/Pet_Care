<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
    protected $table = 'categori';
    protected $guarded = ['id'];

    public function Barang()
    {
        return $this->belongsTo('\App\Barang', 'categori_id', 'id');
    }
    // use HasFactory;
}
