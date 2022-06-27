<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SugestoesTerapeuticas extends Model
{
    use HasFactory;

    public function pacient() {
        return $this->belongsTo('App\Models\Pacient');
    }

    protected $casts = [
        'comprometimento_cognitivo' => 'array',
        'violencia_domestica' => 'array',
        'dependencia_uma_ou_mais_funcoes' => 'array',
        'dependencia_parcial' => 'array',
        'dependencia_total' => 'array',
        'idoso_risco_fragilizacao' => 'array',
        'idoso_fragil' => 'array',
        'baixo_risco_quedas' => 'array',
        'risco_quedas_moderado' => 'array',
        'alto_risco_quedas' => 'array',
        'ambiente_sem_seguranca' => 'array',
        'hipersonia' => 'array',
        'insonia' => 'array',
        'parassonia' => 'array',
        'incontinencia_urinaria' => 'array',
        'baixo_peso' => 'array',
        'sobre_peso' => 'array',
        'suspeita_depressao' => 'array',
    ];
}
