<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
