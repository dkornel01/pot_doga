<?php

use App\Models\clubs;
use App\Models\membership;
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
        Schema::create('clubs', function (Blueprint $table) {
            //auto-i, pr-k, bigint
            $table->id('club_id');
            $table->date('establishment');
            $table->string('location');
            $table->integer('max_number');
            $table->timestamps();
           
        });
        clubs::create(['clubs_id'=>1,'establishment'=>'2020_01_12','location'=>'Pest','max_number'=>100]);
        clubs::create(['clubs_id'=>2,'establishment'=>'2020_01_13','location'=>'Buda','max_number'=>300]);
        clubs::create(['clubs_id'=>3,'establishment'=>'2020_01_14','location'=>'Győr','max_number'=>200]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
