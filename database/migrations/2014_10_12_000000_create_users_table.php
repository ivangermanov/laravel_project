<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Storage;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('country')->nullable();
            $table->text('description')->nullable();
            $table->string('breed')->nullable();
            $table->date('dob')->nullable();
            $table->string('img_link')->nullable()->default(Storage::url('public/images/miscellaneous/profiledog_.png'));
            $table->timestamp('last_online')->nullable();
            $table->boolean('online')->default(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->unsignedTinyInteger('role')->default(1);
            $table->string('password');
            $table->rememberToken();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
