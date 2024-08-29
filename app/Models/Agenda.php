<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getTanggalSuratAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d/m/y');
    }

    public function getTanggalTerimaAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d/m/y');
    }
}
