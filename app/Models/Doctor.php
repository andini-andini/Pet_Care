<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public $table = "doctor";
    use HasFactory;

    protected $fillable = [
        'sip',
        'name',
        'email',
        'phone',
        'address',
        'image',
    ];
}
