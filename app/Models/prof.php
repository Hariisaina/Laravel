<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prof extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'module',
        'email',
        'telephone',
        'adresse',
    ];
  // Modèle Prof

public function pointages() {
    return $this->hasMany(Pointage::class, 'prof_id'); // Assurez-vous d'utiliser le nom correct de la clé étrangère
}

public function paiements(){
    return $this->hasMany(Paiement::class,'prof_id');
}
public function paiement()
{
    return $this->hasOne(Paiement::class);
}

}
