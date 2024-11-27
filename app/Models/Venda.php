<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $fillable = [
        'veiculo_id', 'comprador', 'data_venda', 'valor'
    ];

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class);
    }
}

