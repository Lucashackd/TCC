<?php

namespace Database\Seeders;

use App\Models\Flag;
use App\Models\User;
use App\Models\Video;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // (new FlagSeeder())->run();

        Video::factory(10)->create();

        $this->call([
            FlagSeeder::class,
            UserFlagSeeder::class,
        ]);

        $this->call([
            FlagSeeder::class,
            VideoFlagSeeder::class,
        ]);
    }
}
