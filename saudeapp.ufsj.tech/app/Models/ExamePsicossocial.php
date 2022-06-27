<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamePsicossocial extends Model
{
    use HasFactory;

    public function pacient() {
        return $this->belongsTo('App\Models\Pacient');
    }

    public function formulario() {
        return $this->hasMany('App\Models\Formulario');
    }

    protected $guarded = [];
}
