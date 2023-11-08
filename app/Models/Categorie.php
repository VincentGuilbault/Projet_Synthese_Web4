<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'groupe_categorie_id',
    ];

    public function groupe_categorie()
    {
        return $this->belongsTo(GroupeCategorie::class);
    }
    public function entreprise()
    {
        return $this->hasMany(Categorie::class);
    }
}
