<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ucenik;

class UcenikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ucenici = [
            [
                'ime' => 'Ana Horvat',
                'email' => 'ana.horvat@example.com',
            ],
            [
                'ime' => 'Ivan Kovač',
                'email' => 'ivan.kovac@example.com',
            ],
            [
                'ime' => 'Marija Novak',
                'email' => 'marija.novak@example.com',
            ],
            [
                'ime' => 'Petar Petrović',
                'email' => 'petar.petrovic@example.com',
            ],
            [
                'ime' => 'Jelena Marković',
                'email' => 'jelena.markovic@example.com',
            ],
        ];
        foreach ($ucenici as $ucenikData) {
            // Use the Eloquent model to create records
            Ucenik::create($ucenikData);
        }
    }
}
