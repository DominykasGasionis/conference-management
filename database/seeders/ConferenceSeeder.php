<?php

namespace Database\Seeders;

use App\Models\Conference;
use App\Models\User;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where('email', 'admin@example.com')->first();

        if ($admin) {
            Conference::create([
                'user_id' => $admin->id,
                'title' => 'Laravel Development Conference 2025',
                'description' => 'Join us for an in-depth discussion on modern Laravel development practices, including testing, performance optimization, and real-world applications.',
                'date' => '2025-12-15',
                'address' => 'Vilnius Convention Center, Vilnius',
                'participants' => 250,
            ]);

            Conference::create([
                'user_id' => $admin->id,
                'title' => 'Web Security Summit',
                'description' => 'A comprehensive summit covering the latest web security threats, best practices for securing applications, and emerging trends in cybersecurity.',
                'date' => '2025-12-20',
                'address' => 'Kaunas Technology Park, Kaunas',
                'participants' => 180,
            ]);

            Conference::create([
                'user_id' => $admin->id,
                'title' => 'PHP Best Practices Workshop',
                'description' => 'Intensive workshop on PHP best practices, code quality, design patterns, and production-ready application development.',
                'date' => '2025-12-28',
                'address' => 'Tech Hub Vilnius, Vilnius',
                'participants' => 100,
            ]);
        }
    }
}
