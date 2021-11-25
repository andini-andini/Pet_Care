<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    // protected $table = 'pemesanan';

    // protected $fillable = [
    //     'code',
    //     'user_id',
    //     'service_id',
    //     'hewan',
    //     'booking',
    //     'status',
    //     'upload_bukti'
    // ];
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
    // public function service()
    // {
    //     return $this->belongsTo(Service::class, 'service_id');
    // }
}
