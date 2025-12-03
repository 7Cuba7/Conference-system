<?php

namespace Database\Seeders;

use App\Models\Conference;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conferences = [
            [
                'title' => 'Klimato kaitos švelninimas 2025',
                'description' => 'Tarptautinė konferencija, skirta klimato kaitos problemų sprendimui, atsinaujinančių energijos šaltinių diegimui ir anglies dioksido išmetimo mažinimui. Susitiks pasaulio mokslininkai, politikai ir aplinkosaugininkiai.',
                'date' => '2025-06-15',
                'address' => 'Konstitucijos pr. 20',
                'city' => 'Vilnius',
                'participants_count' => 250,
            ],
            [
                'title' => 'Baltijos jūros apsauga',
                'description' => 'Regioninė konferencija apie Baltijos jūros ekosistemos išsaugojimą, vandens taršos mažinimą ir tvarų žvejybos valdymą. Dalyvauja Baltijos šalių aplinkosaugos ministerijų atstovai.',
                'date' => '2025-09-20',
                'address' => 'Naujojo Sodo g. 1',
                'city' => 'Klaipėda',
                'participants_count' => 180,
            ],
            [
                'title' => 'Biologinės įvairovės išsaugojimas',
                'description' => 'Konferencija apie retų rūšių apsaugą, natūralių buveinių atkūrimą ir biologinės įvairovės svarbą ekosistemų stabilumui. Pristatomi naujausi tyrimai ir praktiniai sprendimai.',
                'date' => '2025-11-10',
                'address' => 'Universiteto g. 3',
                'city' => 'Kaunas',
                'participants_count' => 200,
            ],
            [
                'title' => 'Žiedinė ekonomika ir atliekų tvarkymas',
                'description' => 'Forumas apie žiedinės ekonomikos principų taikymą, atliekų perdirbimą, pakartotinį panaudojimą ir produktų gyvavimo ciklo pailginimą. Pristatomos inovatyvios technologijos.',
                'date' => '2025-08-05',
                'address' => 'Savanorių pr. 28',
                'city' => 'Vilnius',
                'participants_count' => 220,
            ],
            [
                'title' => 'Miestų želdinimas ir oro kokybė',
                'description' => 'Konferencija apie miestų želdinimą, parkų kūrimą, oro kokybės gerinimą ir miestų ekologiją. Dalijamasi gerąja praktika iš įvairių Europos miestų.',
                'date' => '2025-10-12',
                'address' => 'Didžioji g. 34',
                'city' => 'Vilnius',
                'participants_count' => 150,
            ],
            [
                'title' => 'Atsinaujinanti energija ir tvari plėtra',
                'description' => 'Tarptautinė konferencija apie saulės, vėjo ir hidroenergijos technologijas, energijos efektyvumą ir tvarią energetikos plėtrą. Pristatomi naujausi moksliniai tyrimai.',
                'date' => '2025-07-18',
                'address' => 'Technologijos g. 15',
                'city' => 'Kaunas',
                'participants_count' => 280,
            ],
            [
                'title' => 'Vandens išteklių valdymas',
                'description' => 'Konferencija apie gėlo vandens išteklių valdymą, paviršinių ir požeminių vandenų apsaugą, vandens taršos prevenciją ir darnų naudojimą.',
                'date' => '2025-05-22',
                'address' => 'Ežero g. 8',
                'city' => 'Vilnius',
                'participants_count' => 160,
            ],
        ];

        foreach ($conferences as $conference) {
            Conference::create($conference);
        }
    }
}
