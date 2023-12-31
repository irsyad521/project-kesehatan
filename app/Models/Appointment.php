<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['date_time', 'description'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
