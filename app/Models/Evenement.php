<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        //'entreprise_id',
        'emplacement',
        'ville',
        'prix',
        'date_debut',
        'date_fin',
    ];

    public function produit()
    {
        $this->belongsTo(Produit::class);
    }
    public function entreprise()
    {
        $this->belongsTo(Entreprise::class);
    }
}
