<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manutencao extends Model
{
    use HasFactory;
    protected $table = 'manutencao';

    protected $fillable = [
        'veiculo_id', 'data_manutencao', 'tipo_servico', 'custo'
    ];

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class);
    }
}
