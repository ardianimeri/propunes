<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplikimi extends Model
{
    use HasFactory;
    protected $table = 'aplikimet';
    protected $fillable = [

        'Titulli',
        'Pershkrimi',
        'Kategoria',
        'Lokacioni',
        'Orari'
    ];
}
