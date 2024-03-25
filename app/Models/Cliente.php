<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    
    public function enderecos() {
        return $this->hasMany('App\Models\Endereco');
    }

    
}
