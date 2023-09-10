<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pitanje;

class PitanjeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pitanja = [
            [
                'pitanje' => 'Koja je glavna prijestolnica Francuske?',
                'odgovor' => 'Pariz',
            ],
            [
                'pitanje' => 'Koliko planeta ima Sunčev sustav?',
                'odgovor' => '8',
            ],
            [
                'pitanje' => 'Tko je autor knjige "Rat i mir"?',
                'odgovor' => 'Lev Tolstoj',
            ],
            [
                'pitanje' => 'Što je najveći kontinent na Zemlji?',
                'odgovor' => 'Azija',
            ],
            [
                'pitanje' => 'Koji je najveći ocean na svijetu?',
                'odgovor' => 'Tihii okean',
            ],
            [
                'pitanje' => 'Koji je glavni grad Italije?',
                'odgovor' => 'Rim',
            ],
            [
                'pitanje' => 'Koja je najviša planina na svijetu?',
                'odgovor' => 'Mount Everest',
            ],
            [
                'pitanje' => 'Koja je glavna boja banana?',
                'odgovor' => 'Žuta',
            ],
            [
                'pitanje' => 'Kako se zove najveća pustinja na svijetu?',
                'odgovor' => 'Sahara',
            ],
            [
                'pitanje' => 'Tko je napisao dramu "Romeo i Julija"?',
                'odgovor' => 'William Shakespeare',
            ],
        ];
        foreach ($pitanja as $data) {
            Pitanje::create($data);
        }
    }
}
