<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();

            $table->unsignedBigInteger('user_id');


            $table->unsignedBigInteger('division_id');
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('state_id');
            $table->string('shipping_name_one');
            $table->string('shipping_email_one');
            $table->string('shipping_phone_one');
            $table->integer('post_code_one')->nullable();
            $table->string('village_one');
            $table->text('notes')->nullable();

            $table->string('division_two')->nullable();
            $table->string('district_two')->nullable();
            $table->string('state_two')->nullable();
            $table->string('shipping_name_two')->nullable();
            $table->string('shipping_email_two')->nullable();
            $table->string('shipping_phone_two')->nullable();
            $table->integer('post_code_two')->nullable();
            $table->integer('others_shipping')->nullable();
            $table->string('village_two')->nullable();
            
            $table->integer('payment_number')->nullable();
            $table->string('reference_name')->nullable();
            $table->string('payment_type');
            $table->string('payment_method')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('currency');
            $table->float('amount',8,2);  
            $table->string('order_number')->nullable();
            $table->string('invoice_no');
            $table->string('order_date');
            $table->string('order_month');
            $table->string('order_year');
            $table->string('confirmed_date')->nullable();
            $table->string('processing_date')->nullable();
            $table->string('picked_date')->nullable();
            $table->string('shipped_date')->nullable();
            $table->string('delivered_date')->nullable();
            $table->string('cancel_date')->nullable();
            $table->string('return_date')->nullable();
            $table->integer('return_order')->default(0);
            $table->string('return_reason')->nullable();
            $table->string('status');


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
