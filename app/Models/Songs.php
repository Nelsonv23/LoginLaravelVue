<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    use HasFactory;
    //Para insertar datos en DB
    protected $fillable = ['title','autor','album'];
}
