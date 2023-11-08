<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupeCategorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
    ];

    public function categories()
    {
        return $this->hasMany(Categorie::class);
    }
}
