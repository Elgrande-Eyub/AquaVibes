<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;


    public $timestamps = true;

    protected $table = 'appointments';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'time',
        'appointment',
        'message',
    ];
}
