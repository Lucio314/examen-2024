<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'point_depart' => 'Cotonou',
            'point_arrivee' => 'Calavi',
            'date_heure' => '2024-04-16 07:30:00',
            'chauffeur_id' => 1,
            'statut' => 'en cours',
        ]);
        Course::create([
            'point_depart' => 'Cotonou',
            'point_arrivee' => 'Parakou',
            'date_heure' => '2024-04-16 09:30:00',
            'chauffeur_id' => 1,
            'statut' => 'en cours',
        ]);
        Course::create([
            'point_depart' => 'Natitingou',
            'point_arrivee' => 'Parakou',
            'date_heure' => '2024-04-16 06:30:00',
            'chauffeur_id' => 2,
            'statut' => 'en cours',
        ]);
    }
}
