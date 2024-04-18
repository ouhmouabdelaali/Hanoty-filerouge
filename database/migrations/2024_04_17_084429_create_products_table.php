Stores<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->text('description')->nullable();
            $table->foreignId('provider_id')->nullable();
            $table->unsignedBigInteger('sous_category_id')->nullable();
            $table->foreign('provider_id')
                  ->nullable()
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->where('role_id', 2);
            $table->foreign('sous_category_id')->nullable()->references('id')->on('sous_categories');
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
        Schema::dropIfExists('products');
    }
}
