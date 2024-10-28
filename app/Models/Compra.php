<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = ['ticker_ativo', 'data_compra', 'quantidade', 'cotacao'];

    public function ativo()
    {
        return $this->belongsTo(Ativo::class, 'ticker_ativo');
    }
}
