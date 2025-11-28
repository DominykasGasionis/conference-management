<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Conference;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Conference::create([
            'title' => 'Tech Innovators Summit',
            'description' => 'A conference for the latest in tech innovation.',
            'date' => '2024-09-15',
            'address' => '123 Tech Lane, Silicon Valley, CA',
            'participants' => 250,
        ]);

        Conference::create([
            'title' => 'Healthcare Advances Conference',
            'description' => 'Exploring new advancements in healthcare technology.',
            'date' => '2024-10-20',
            'address' => '456 Health St, Boston, MA',
            'participants' => 300,
        ]);
    }
}
