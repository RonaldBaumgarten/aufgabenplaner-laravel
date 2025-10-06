<?php

namespace Database\Seeders;

use App\Models\UserMessage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserMessage::factory()
            ->count(1)
            ->hasUsers(1)
            //->hasEmpfaengers(1)
            ->create();
    }
}
