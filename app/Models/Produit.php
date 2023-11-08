<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'entreprise_id',
        'prix',
        'date_activite',
    ];

    public function activite()
    {
        $this->hasMany(Activite::class);
    }
    public function evenement()
    {
        $this->hasMany(Evenement::class);
    }
    public function entreprise()
    {
        $this->belongsTo(Entreprise::class);
    }
}
