<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Task;
use App\Models\UserMessage;
use Database\Seeders\TaskSeeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(3)->create();

        $this->call([
            TaskSeeder::class,
            UserMessageSeeder::class,
        ]);
    }
}
