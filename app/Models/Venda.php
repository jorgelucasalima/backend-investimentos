<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $fillable = ['ticker_ativo', 'data_venda', 'quantidade'];

    public function ativo()
    {
        return $this->belongsTo(Ativo::class, 'ticker_ativo');
    }
}
