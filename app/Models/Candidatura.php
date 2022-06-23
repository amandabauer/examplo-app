<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidatura extends Model
{
    use softDeletes;

    //protected $table = 'candidatura';
    protected $fillable = [
   'nome',
   'email',
   'linkedin',
    'gituhub',
];

protected $dates = [
    'deleted_at',
];

public function vagas(){
    return this->hasMany(related:Vaga::class);
}
}
