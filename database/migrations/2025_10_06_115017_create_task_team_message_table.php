<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Task;
use App\Models\TeamMessage;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('task_team_message', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Task::class);
            $table->foreignIdFor(TeamMessage::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_team_message');
    }
};
