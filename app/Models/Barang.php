<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public $table = "barang";

    protected $fillable = [
        'name',
        'price',
        'image',
    ];

    public function Categori()
    {
        return $this->belongsTo(Categori::class, 'categori_id');
    }
}
