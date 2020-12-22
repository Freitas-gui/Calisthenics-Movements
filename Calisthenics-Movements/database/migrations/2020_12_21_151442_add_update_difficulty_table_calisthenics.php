<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUpdateDifficultyTableCalisthenics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('calisthenics', function (Blueprint $table) {
            DB::statement("ALTER TABLE calisthenics MODIFY difficulty ENUM('easy', 'medium', 'hard','expert') NOT NULL");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('calisthenics', function (Blueprint $table) {
            DB::statement("ALTER TABLE calisthenics MODIFY difficulty ENUM('easy', 'medium', 'hard') NOT NULL");
        });
    }
}
