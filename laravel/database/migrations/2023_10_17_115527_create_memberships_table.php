<?php

use App\Models\membership;
use App\Models\Users;
use Illuminate\Console\View\Components\Task;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->id('member_id');
            $table->foreignid('club_id')->references('club_id')->on('clubs');
            $table->foreignid('user_id')->references('id')->on('users');
            $table->timestamps();
        });
        membership::create(['member_id'=>1,'club_id'=>1,'user_id'=>3,]);
        membership::create(['member_id'=>2,'club_id'=>2,'user_id'=>2,]);
        membership::create(['member_id'=>3,'club_id'=>3,'user_id'=>1,]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
