<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rarities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255)->comment('レアリティ記号名');
            $table->string('label', 255)->comment('レアリティ名');
            $table->boolean('del_flag')->default(0);
            $table->dateTime('created')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->datetime('modified')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rarities');
    }
}
