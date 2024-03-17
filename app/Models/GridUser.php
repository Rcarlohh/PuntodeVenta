<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GridUser extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'status',
        'type'
        // Otros campos que puedas tener en tu tabla de usuarios
    ];
}