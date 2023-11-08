<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse',
        'ville',
        'email',
        'code_postal',
        'num_telephone',
        'url_photo',
        'url_logo',
        'site_web',
        'description',
        //'categorie_id',
    ];

    public function categorie()
    {
        $this->belongsTo(Categorie::class);
    }
    public function membre()
    {
        $this->belongsTo(Membre::class);
    }
    public function fans()
    {
        return $this->morphToMany(Membre::class, 'favori', 'favoris');
    }
    public function getEstAimerAttribute()
    {
        // if(auth()->guest()) return false;
        $membre = Membre::find(1); //temporaire
        return $this->fans()->where('membre_id', $membre->id)->count() > 0;
    }
}
