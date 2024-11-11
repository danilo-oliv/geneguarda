<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MaterialDoador extends Model
{
    use HasFactory;

    public function doador() : HasOne {
        return $this->hasOne(Animal::class);
    }
}
