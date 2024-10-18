<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fazenda extends Model
{
    use HasFactory;

    public $id_proprietario;
    public $sequencia;
    public $nome;
    public $tamanho;
    public $municipio;

    public function proprietario() : BelongsTo {
        return $this->belongsTo(Proprietario::class,"");
    }

}
