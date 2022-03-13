<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('保有してるユーザーID');
            $table->string('name', 255)->comment('カード名');
            $table->unsignedInteger('expansion_mark_id')->comment('エキスパンションマークID');
            $table->unsignedInteger('regulation_id')->comment('レギュレーションマークID');
            $table->integer('list_no')->comment('リスト番号');
            $table->unsignedInteger('rarity_id')->comment('レアリティ');
            $table->dateTime('created')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->datetime('modified')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon_cards');
    }
}
