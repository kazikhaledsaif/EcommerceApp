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
            $table->text('details')->nullable();
            $table->decimal('regular_price', 8, 2);
            $table->decimal('discount_price', 8, 2)->nullable();
            $table->text('description')->nullable();
            $table->string('feature_name')->nullable();
            $table->string('feature_color')->nullable();
            $table->integer('category_id');
            $table->integer('stock')->default(0);
            $table->integer('percentage')->nullable();
            $table->string('badge')->nullable();
            $table->dateTime('weekly_deal')->nullable();
            $table->decimal('rating',8,2)->nullable();
            $table->string('product_image')->nullable();
            $table->string('gallery_image1')->nullable();
            $table->string('gallery_image2')->nullable();
            $table->string('gallery_image3')->nullable();
            $table->string('gallery_image4')->nullable();
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
