<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Animal extends Model
{
    public $nome = "";
    public $peso = 0;
    public $brinco = "";
    public $sexo;
    public $cod_raca;
    public $id_proprietario;

    //protected $fillable = ['brinco', 'nome', 'peso', 'sexo', 'cod_raca', 'id_proprietario'];
    protected $guarded = [];
    protected $table = 'animal';
    protected $primaryKey = 'id_animal';
    public $timestamps = false;

    use HasFactory;

    public function Proprietario() : BelongsTo {
        return $this->belongsTo(Proprietario::class);
    }

    public function Receptora(): hasOne {
        return $this->hasOne(Receptora::class);
    }

    public function Sexo() {
        return $this->belongsTo(Sexo::class);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function getBrinco()
    {
        return $this->brinco;
    }

    public function setBrinco($brinco)
    {
        $this->brinco = $brinco;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getCodRaca(){
        return $this->cod_raca; 
    }

    public function setCodRaca($cod_raca){
        $this->cod_raca = $cod_raca;
    }

    public function getIdProprietario(){
        return $this->id_proprietario;
    }

    public function setIdProprietario($id_proprietario){
        $this->id_proprietario = $id_proprietario;
    }

}
