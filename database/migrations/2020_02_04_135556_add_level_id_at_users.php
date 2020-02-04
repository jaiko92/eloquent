<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLevelIdAtUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //agregando level_id a users table
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('level_id')->unsigned()
                ->nullable()
                ->after('id');
                
            // relacion level_id con levels
            $table->foreign('level_id')->references('id')->on('levels')
                ->onDelete('set null')
                ->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
