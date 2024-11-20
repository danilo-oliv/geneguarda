<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MaterialDoador extends Model
{
    use HasFactory;

    protected $table = 'materialdoador';
    protected $guarded = [];
    protected $primaryKey = 'idmaterial';
    public $timestamps = false;

    public function doador() : HasOne {
        return $this->hasOne(Animal::class);
    }
}
