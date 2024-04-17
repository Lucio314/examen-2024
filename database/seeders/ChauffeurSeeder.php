<?php

namespace Database\Seeders;

use App\Models\Chauffeur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChauffeurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chauffeur::create([
            'nom' => 'Doe',
            'prenom' => 'John',
            'telephone' => '123-456-789',
            'sexe' => 'M',
            'disponible' => 'non'
        ]);
        Chauffeur::create([
            'nom' => 'Djena',
            'prenom' => 'Jane',
            'telephone' => '123-456-789',
            'sexe' => 'F',
            'disponible' => 'non'
        ]);
    }
}
