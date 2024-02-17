<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('parent_id')->nullable();
            $table->integer('language_id')->nullable()->default(1);
            $table->unsignedBigInteger('product_category_id')->nullable()->index('products_product_category_id_foreign');
            $table->string('name')->default('');
            $table->string('slug')->nullable()->unique();
            $table->text('description')->nullable();
            $table->text('text')->nullable();
            $table->boolean('is_active')->nullable()->default(true);
            $table->decimal('price', 10)->nullable();
            $table->integer('discount_percentage')->nullable()->default(0);
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
};
