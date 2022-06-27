<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacient extends Model
{
    use HasFactory;

    public function exameFisico() {
        return $this->hasMany('App\Models\ExameFisico');
    }

    public function examePsicossocial() {
        return $this->hasMany('App\Models\ExamePsicossocial');
    }

    public function exameFuncional() {
        return $this->hasMany('App\Models\ExamePsicossocial');
    }

    public function formularios() {
        return $this->hasMany('App\Models\Formulario');
    }

    public function sugeTerapeuticas() {
        return $this->hasMany('App\Models\SugestoesTerapeuticas');
    }
}
