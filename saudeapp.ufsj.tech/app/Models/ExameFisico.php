<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExameFisico extends Model
{
    use HasFactory;

    protected $casts = [
        'exam_couroCabeludo' => 'array',
        'exam_olhos' => 'array',
        'exam_ouvido' => 'array',
        'exam_boca' => 'array',
        'exam_pescoco' => 'array',
        'sisRespiratorio_inspecao' => 'array',
        'sisRespiratorio_palpacao' => 'array',
        'sisRespiratorio_percussao' => 'array',
        'sisRespiratorio_ausculta' => 'array',
        'sisRespiratorio_outros' => 'array',
        'sisCardiovascular_inspecao' => 'array',
        'sisCardiovascular_palpacao' => 'array',
        'sisCardiovascular_ausculta' => 'array',
        'sisCardiovascular_outros' => 'array',
        'sisUrologico_nocturia' => 'array',
        'exameMamas' => 'array',
        'sisGastrointestinal_inpecaoAbdomen' => 'array',
        'sisGastrointestinal_auscultaAbdominal' => 'array',
        'sisGastrointestinal_percussao' => 'array',
        'sisGastrointestinal_palpacao' => 'array',
        'intCutaneoMucosa' => 'array',
        'avPes' => 'array',
        'areaSensibilidadePes' => 'array'
    ];

    public function pacient() {
        return $this->belongsTo('App\Models\Pacient');
    }

    protected $guarded = [];

    public function formulario() {
        return $this->hasMany('App\Models\Formulario');
    }
}
