<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('set null');
            $table->string('billing_email');
            $table->string('billing_first_name');
            $table->string('billing_last_name')->nullable();
            $table->string('billing_phone_no')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('billing_town')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_zip_code')->nullable();
            $table->integer('billing_discount')->default(0)->nullable();
            $table->string('billing_discount_code')->nullable();
            $table->integer('billing_subtotal');
            $table->integer('billing_shipping_fee')->nullable();
            $table->integer('billing_total');
            $table->string('billing_payment_gateway')->default('paypal')->nullable();
            $table->boolean('shipped')->default(false);
            $table->string('status')->nullable();
            $table->string('billing_id')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
