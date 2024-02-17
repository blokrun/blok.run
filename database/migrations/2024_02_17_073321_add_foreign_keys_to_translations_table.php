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
        Schema::table('translations', function (Blueprint $table) {
            $table->foreign(['language_id'])->references(['id'])->on('languages')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['parent_id'])->references(['id'])->on('translations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('translations', function (Blueprint $table) {
            $table->dropForeign('translations_language_id_foreign');
            $table->dropForeign('translations_parent_id_foreign');
        });
    }
};
