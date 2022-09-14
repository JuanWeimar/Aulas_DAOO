<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresas';
    protected $fillable = [
        'nome_empresa',
        'email_empresa',
        'cnpj',
        'senha_empresa'
    ];

    public function vagas()
    {
        return $this->hasMany(Vaga::class);
    }
}
