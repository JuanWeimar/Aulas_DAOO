<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

    protected $fillable = [
        'competencia',
        'nome_candidato',
        'email_candidato',
        'curriculo',
        'cpf',
        'senha_candidato'
    ];

    public function vagas()
    {
        return $this->hasMany(Vaga::class);
    }
}
