<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("categoryId")->unsigned();
            $table->foreign('categoryId')->references('id')->on('categories');
            $table->string("title");
            $table->string("description",767);
            $table->string("price");
            $table->string('author');
            $table->string("image");
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
        Schema::dropIfExists('product_books');
    }
}
