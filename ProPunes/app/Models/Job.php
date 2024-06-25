<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'jobs';
    protected $fillable = [

        'Titulli',
        'Pershkrimi',
        'Kategoria',
        'Lokacioni',
        'Orari'
        
    ];
    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function applicants(){
        return $this->belongsToMany(User::class,'job_user', 'job_id', 'user_id');
    }
}
