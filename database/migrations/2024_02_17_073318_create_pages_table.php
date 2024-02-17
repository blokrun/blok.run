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
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug')->nullable();
            $table->text('text')->nullable();
            $table->boolean('is_active')->nullable();
            $table->unsignedBigInteger('category_id')->nullable()->index('pages_category_id_foreign');
            $table->unsignedBigInteger('language_id')->nullable()->index('pages_language_id_foreign');
            $table->timestamps();
            $table->text('description')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('website_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
};
