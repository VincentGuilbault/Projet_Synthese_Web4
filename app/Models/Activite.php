<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        //'entreprise_id',
        'prix',
        'date_activite',
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
