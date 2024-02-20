<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('language_id')->index('categories_language_id_foreign');
            $table->boolean('is_active')->default(true);
            $table->integer('position');
            $table->timestamps();
        });

        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });

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

        Schema::create('media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('model_type');
            $table->unsignedBigInteger('model_id');
            $table->char('uuid', 36)->nullable()->unique();
            $table->string('collection_name');
            $table->string('name');
            $table->string('file_name');
            $table->string('mime_type')->nullable();
            $table->string('disk');
            $table->string('conversions_disk')->nullable();
            $table->unsignedBigInteger('size');
            $table->json('manipulations');
            $table->json('custom_properties');
            $table->json('generated_conversions');
            $table->json('responsive_images');
            $table->unsignedInteger('order_column')->nullable()->index();
            $table->timestamps();

            $table->index(['model_type', 'model_id']);
        });

        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug')->nullable();
            $table->text('text')->nullable();
            $table->boolean('is_active')->nullable();
            $table->integer('is_homepage')->nullable();
            $table->unsignedBigInteger('category_id')->nullable()->index('pages_category_id_foreign');
            $table->unsignedBigInteger('language_id')->nullable()->index('pages_language_id_foreign');
            $table->timestamps();
            $table->text('description')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('website_url')->nullable();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
/*
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tokenable_type');
            $table->unsignedBigInteger('tokenable_id');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();

            $table->index(['tokenable_type', 'tokenable_id']);
        });
*/
        Schema::create('product_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('language_id')->index('product_categories_language_id_foreign');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->boolean('is_active')->nullable()->default(true);
            $table->boolean('is_homepage')->nullable()->default(false);
            $table->integer('position_nb')->nullable()->default(0);
            $table->timestamps();
        });

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

        Schema::create('translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_id')->nullable()->index('translations_parent_id_foreign');
            $table->text('text');
            $table->unsignedBigInteger('language_id')->index('translations_language_id_foreign');
            $table->timestamps();
            $table->string('slug');
        });

        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('categories', function (Blueprint $table) {
            $table->foreign(['language_id'])->references(['id'])->on('languages')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });

        Schema::table('pages', function (Blueprint $table) {
            $table->foreign(['category_id'])->references(['id'])->on('categories')->onUpdate('NO ACTION')->onDelete('SET NULL');
            $table->foreign(['language_id'])->references(['id'])->on('languages')->onUpdate('NO ACTION')->onDelete('SET NULL');
        });

        Schema::table('product_categories', function (Blueprint $table) {
            $table->foreign(['language_id'])->references(['id'])->on('languages')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['parent_id'])->references(['id'])->on('product_categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });

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

        Schema::table('product_categories', function (Blueprint $table) {
            $table->dropForeign('product_categories_language_id_foreign');
            $table->dropForeign('product_categories_parent_id_foreign');
        });

        Schema::table('pages', function (Blueprint $table) {
            $table->dropForeign('pages_category_id_foreign');
            $table->dropForeign('pages_language_id_foreign');
        });

        Schema::table('categories', function (Blueprint $table) {
            $table->dropForeign('categories_language_id_foreign');
        });

        Schema::dropIfExists('users');

        Schema::dropIfExists('translations');

        Schema::dropIfExists('products');

        Schema::dropIfExists('product_categories');

        Schema::dropIfExists('personal_access_tokens');

        Schema::dropIfExists('password_reset_tokens');

        Schema::dropIfExists('pages');

        Schema::dropIfExists('media');

        Schema::dropIfExists('languages');

        Schema::dropIfExists('failed_jobs');

        Schema::dropIfExists('categories');
    }
};
