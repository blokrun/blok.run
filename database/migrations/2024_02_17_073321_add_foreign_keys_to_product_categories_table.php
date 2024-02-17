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
        Schema::table('product_categories', function (Blueprint $table) {
            $table->foreign(['language_id'])->references(['id'])->on('languages')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['parent_id'])->references(['id'])->on('product_categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_categories', function (Blueprint $table) {
            $table->dropForeign('product_categories_language_id_foreign');
            $table->dropForeign('product_categories_parent_id_foreign');
        });
    }
};
