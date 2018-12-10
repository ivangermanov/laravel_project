<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBreeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breeds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('breed');
            $table->unsignedDecimal('height', 3, 2);
            $table->unsignedTinyInteger('weight');
            $table->text('history');
            $table->text('traits');
            $table->string('img_link')->nullable();
            $table->unsignedInteger('author');
            $table->integer('visits')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('breeds');
    }
}
