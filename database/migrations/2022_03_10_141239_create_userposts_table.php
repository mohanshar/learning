<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userposts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('user')->nullable();
            $table->string('description')->nullable();
            $table->text('image')->nullable();
            $table->string('status')->nullable();
            $table->string('approved_declined')->nullable();
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
        Schema::dropIfExists('userposts');
    }
}
