<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMuscleGroupTableCalisthenics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('calisthenics', function (Blueprint $table) {
            $table->string('muscle_group');
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
            $table->dropColumn('muscle_group');
        });
    }
}
