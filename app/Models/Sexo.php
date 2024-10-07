<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;

    protected $fillable = ['descricao'];
    protected $incrementing = false;
    protected $keyType = 'string';

    public function Animal(){
        return $this->hasMany(Animal::class);
    }
}
