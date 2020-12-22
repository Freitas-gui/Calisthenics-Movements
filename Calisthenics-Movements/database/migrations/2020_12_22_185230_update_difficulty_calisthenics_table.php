<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class UpdateDifficultyCalisthenicsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
        Schema::table('calisthenics', function (Blueprint $table) {
            $table->string('difficulty', 15)->change();
            $table->index('difficulty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'enum');
        Schema::table('calisthenics', function (Blueprint $table) {
            $table->dropIndex('difficulty');
            DB::statement("ALTER TABLE calisthenics MODIFY difficulty ENUM('easy', 'medium', 'hard','expert') DEFAULT ''");
        });
    }


}
