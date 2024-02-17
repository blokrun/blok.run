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
        Schema::table('pages', function (Blueprint $table) {
            $table->foreign(['category_id'])->references(['id'])->on('categories')->onUpdate('NO ACTION')->onDelete('SET NULL');
            $table->foreign(['language_id'])->references(['id'])->on('languages')->onUpdate('NO ACTION')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropForeign('pages_category_id_foreign');
            $table->dropForeign('pages_language_id_foreign');
        });
    }
};
