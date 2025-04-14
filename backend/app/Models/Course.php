<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function qrTokens()
    {
        return $this->hasMany(QRToken::class);
    }
}
