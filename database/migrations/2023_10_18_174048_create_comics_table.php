<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->char('title', 100);
            $table->text('description')->nullable(true);
            $table->char('thumb', 500);
            $table->tinyInteger('price')->unsigned();
            $table->char('series', 75);
            $table->date('sale_date');
            $table->enum('type', ['comicbook', 'graphic novel']);
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
        Schema::dropIfExists('comics');
    }
};
