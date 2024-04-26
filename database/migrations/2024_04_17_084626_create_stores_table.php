<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->unique()->nullable();
            $table->text('description')->nullable();
            $table->foreignId('categorie_id')->constrained('categories');
            $table->foreignId('user_id')->constrained('users');
            $table->string('logo')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('addres_id')->nullable()->constrained('addresses');
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
        Schema::dropIfExists('stores');
    }
}
