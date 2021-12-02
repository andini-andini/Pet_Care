<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';

    protected $fillable = [
        'user_id',
        'barang_id',
        'qty',
        'total',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }


    /**
     * The pembelians that belong to the Pembelian
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function pembelians(): BelongsToMany
    {
        return $this->belongsToMany(Pembelian::class, 'cart_pembelian', 'cart_id', 'pembelian_id');
    }
}
