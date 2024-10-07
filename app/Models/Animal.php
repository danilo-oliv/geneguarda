<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    private $nome;
    private $peso;
    private $brinco;

    protected $fillable = ['brinco', 'nome', 'peso', 'sexo', 'cod_raca', 'id_proprietario'];

    protected $table = 'animal';
    protected $primaryKey = 'id_animal';

    use HasFactory;

    public function Receptora(): hasOne {
        return $this->hasOne(Receptora::class);
    }

    public function Sexo() {
        return $this->belongsTo(Sexo::class);
    }
}
