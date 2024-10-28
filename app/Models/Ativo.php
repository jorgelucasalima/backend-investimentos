<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ativo extends Model
{
    use HasFactory;

    protected $fillable = ['ticker_ativo', 'data_compra', 'quantidade', 'cotacao', 'tipo'];

    public function compras()
    {
        return $this->hasMany(Compra::class, 'ticker_ativo');
    }

    public function vendas()
    {
        return $this->hasMany(Venda::class, 'ticker_ativo');
    }
}
