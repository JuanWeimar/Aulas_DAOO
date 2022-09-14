<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_vaga',
        'empresa_id',
        'descricao',
        'area_de_atuacao'
    ];

    public function empresas()
    {
        return $this->belongsTo(Empresa::class);
    }
}
