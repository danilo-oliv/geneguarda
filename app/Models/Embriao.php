<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Embriao extends Model
{
    use HasFactory;

    protected $table = 'embriao';
    protected $guarded = [];
    protected $primaryKey = 'cod_embriao';
    public $timestamps = false;
}
