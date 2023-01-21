<?php

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


            $table->integer('brand_id');
            $table->integer('category_id');
            $table->integer('subcategory_id')->nullable();
            $table->integer('sub_subcategory_id')->nullable();
            $table->string('product_name_en');
            $table->string('product_name_others');
            $table->string('product_slug_en');
            $table->string('product_slug_others');
            $table->string('Product_model_en')->nullable();
            $table->string('Product_model_slug_en')->nullable();
            $table->string('Product_model_slug_others')->nullable();
            $table->string('product_qty_en');

            $table->string('product_code_en')->nullable();
            $table->string('product_size_en')->nullable();
            $table->string('product_color_en')->nullable();
            $table->string('selling_price_en');
            $table->string('selling_price_others')->nullable();
            $table->string('discount_price_en')->nullable();
            $table->string('discount_price_others')->nullable();
            $table->text('short_descp_en');
            $table->text('long_descp_en');
            $table->string('sku')->nullable();
            $table->string('product_thambnail_one');
            $table->string('product_thambnail_two');

            $table->string('product_video')->nullable();
            $table->string('product_video_banner')->nullable();
            $table->string('product_guarantee_en')->nullable();

            
            $table->integer('hot_deal')->nullable();
            $table->integer('best_seller')->nullable();
            $table->integer('new_arrivals')->nullable();
            $table->integer('featured')->nullable();
            $table->integer('special_offer')->nullable();
            $table->integer('most_populer')->nullable();

            $table->integer('trending')->nullable();
           
           

            $table->integer('status')->default(0);





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
