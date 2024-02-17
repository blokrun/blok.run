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
        Schema::create('languages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable()->default('');
            $table->timestamps();
            $table->string('code')->nullable()->default('');
            $table->string('slug')->nullable()->default('');
            $table->integer('position_nb')->nullable()->default(0);
            $table->boolean('is_active')->nullable()->default(false);
            $table->boolean('is_default')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
};
