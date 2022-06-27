<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;

    public function pacient() {
        return $this->belongsTo('App\Models\Pacient');
    }

    public function exameFisico() {
        return $this->belongsTo('App\Models\ExameFisico');
    }

    public function exameFuncional() {
        return $this->belongsTo('App\Models\ExameFuncional');
    }

    public function examePsicossocial() {
        return $this->belongsTo('App\Models\ExamePsicossocial');
    }
}
