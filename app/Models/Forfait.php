<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prix',
        'description',
        'categorie',
        'emplacement',
        'date_activation',
        'date_expiration',
    ];

    public function activite()
    {
        $this->hasMany(Activite::class);
    }
    public function evenement()
    {
        $this->hasMany(Evenement::class);
    }
}
