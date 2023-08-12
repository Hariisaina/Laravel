<?php

namespace App\Models;

use App\Models\prof;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pointage extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'module',
        'heured',
        'heuref',
        'date',
        'prof_id',
    ];

    public function prof(){
        return $this->belongsTo(prof::class);
    }
}
