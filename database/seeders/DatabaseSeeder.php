<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Task;
use App\Models\UserMessage;
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
        Task::factory()->count(1)->create();
        UserMessage::factory()->count(1)->create();


        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
         */
    }
}
