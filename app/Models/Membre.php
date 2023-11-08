<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'etablissement',
        'adresse_civique',
        'rue',
        'ville',
        'num_telephone',
        'code_postal',
        'site_web',
        'email',
        'mot_de_passe',
        'commodite',
        'type',
    ];

    public function entreprise()
    {
        $this->hasOne(Entreprise::class);
    }
    public function entrepriseFavorites()
    {
        return $this->morphedByMany(Entreprise::class, 'favori', 'favoris');
    }
}
