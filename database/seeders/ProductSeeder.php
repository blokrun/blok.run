<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Command :
         * artisan seed:generate Product
         *
         */

        
        $newData0 = \App\Models\Product::create([
            'id' => 1,
            'parent_id' => NULL,
            'language_id' => 1,
            'product_category_id' => 1,
            'name' => 'Blue',
            'slug' => 'blue',
            'description' => NULL,
            'text' => NULL,
            'is_active' => 1,
            'price' => '9.99',
            'discount_percentage' => NULL,
            'created_at' => '2024-02-17 08:05:47',
            'updated_at' => '2024-02-17 09:53:09',
        ]);
        $newData1 = \App\Models\Product::create([
            'id' => 13,
            'parent_id' => NULL,
            'language_id' => 1,
            'product_category_id' => 1,
            'name' => 'Black',
            'slug' => 'black',
            'description' => NULL,
            'text' => NULL,
            'is_active' => 1,
            'price' => '11.99',
            'discount_percentage' => 10,
            'created_at' => '2024-02-17 09:53:37',
            'updated_at' => '2024-02-17 09:53:37',
        ]);
    }
}