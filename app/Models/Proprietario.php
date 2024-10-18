<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proprietario extends Model
{
    use HasFactory;

    public $razao_social;
    public $cnpj;
    public $email;
    public $numero_telefone;
    public $DDD; 

    protected $guarded = [];
    protected $table = 'proprietario';
    protected $primaryKey = 'id_proprietario';
    public $timestamps = false;

    public function fazenda() : HasMany {
        return $this->hasMany(Fazenda::class);
    }

    public function animal() : HasMany {
        return $this->hasMany(Animal::class);
    }
}
