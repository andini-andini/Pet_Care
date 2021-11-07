<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    use HasFactory;
    protected $table = "doctor";
    public $timetamps = false;
    protected $fillable = [
        'sip',
        'name',
        'email',
        'phone',
        'address',
        'image',
    ];
}
