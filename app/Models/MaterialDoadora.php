<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class MaterialDoadora extends Model
{
    use HasFactory;

    protected $table = 'materialdoadora';
    protected $guarded = [];
    protected $primaryKey = 'idmaterial';
    public $timestamps = false;

    public function doadora() : HasOne {
        return $this->hasOne(Animal::class);
    }
}
