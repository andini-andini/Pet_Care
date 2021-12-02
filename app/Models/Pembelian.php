<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pembelian extends Model
{
    use HasFactory;

    protected $table = 'pembelian';

    protected $fillable = [
        'code',
        'total',
        'bukti',
        'status',
    ];


    /**
     * The carts that belong to the Pembelian
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function carts(): BelongsToMany
    {
        return $this->belongsToMany(Cart::class, 'cart_pembelian', 'pembelian_id', 'cart_id');
    }

    // public function service()
    // {
    //     return $this->belongsTo(Service::class, 'service_id');
    // }
}
