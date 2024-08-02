<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimento extends Model
{
    use HasFactory;

    protected $fillable = ['pacote_id', 'data_movimento', 'descricao'];

    public function pacote()
    {
        return $this->belongsTo(Pacote::class);
    }
}
