<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Entreprise;
use App\Models\GroupeCategorie;
use App\Models\User;
use Illuminate\Database\Seeder;
use PHPUnit\TextUI\XmlConfiguration\Group;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        GroupeCategorie::factory(5)
            ->has(Categorie::factory(5)
                ->has(Entreprise::factory(5))
            )
            ->create();
    }
}
