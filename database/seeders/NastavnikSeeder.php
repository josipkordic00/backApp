<?php

namespace Database\Seeders;

use App\Models\Nastavnik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NastavnikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nastavnici = [
            [
                'ime' => 'Profesor John Smith',
                'email' => 'john.smith@example.com',
                'lozinka' => 'password123',
            ],
            [
                'ime' => 'Profesor Mary Johnson',
                'email' => 'mary.johnson@example.com',
                'lozinka' => 'password456',
            ],
            [
                'ime' => 'Dr. David Williams',
                'email' => 'david.williams@example.com',
                'lozinka' => 'password789',
            ],
            [
                'ime' => 'Profesor Sarah Davis',
                'email' => 'sarah.davis@example.com',
                'lozinka' => 'passwordABC',
            ],
            [
                'ime' => 'Dr. Michael Brown',
                'email' => 'michael.brown@example.com',
                'lozinka' => 'passwordXYZ',
            ],
        ];
        foreach ($nastavnici as $nastavnikData) {
            // Use the Eloquent model to create records
            Nastavnik::create($nastavnikData);
        }
    }
}
