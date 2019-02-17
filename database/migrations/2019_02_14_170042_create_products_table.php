<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('details')->nullable();
            $table->decimal('present_price', 8, 2);
            $table->decimal('discount_price', 8, 2)->default(0);
            $table->text('description');
            $table->string('feature_name');
            $table->string('feature_color');
            $table->integer('category_id');
            $table->integer('stock');
            $table->integer('percentage');
            $table->string('badge');
            $table->string('product_image');
            $table->string('gallery_image1');
            $table->string('gallery_image2');
            $table->string('gallery_image3');
            $table->string('gallery_image4');
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
