<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
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
         * artisan seed:generate ProductCategory
         *
         */

        
        $newData0 = \App\Models\ProductCategory::create([
            'id' => 1,
            'parent_id' => NULL,
            'language_id' => 1,
            'name' => 'Aliejai',
            'slug' => 'aliejai',
            'description' => NULL,
            'is_active' => 1,
            'is_homepage' => 0,
            'position_nb' => NULL,
            'created_at' => '2024-02-14 13:51:52',
            'updated_at' => '2024-02-14 13:51:52',
        ]);
        $newData1 = \App\Models\ProductCategory::create([
            'id' => 2,
            'parent_id' => NULL,
            'language_id' => 1,
            'name' => 'Tepalai',
            'slug' => 'tepalai',
            'description' => NULL,
            'is_active' => 1,
            'is_homepage' => 0,
            'position_nb' => NULL,
            'created_at' => '2024-02-14 13:58:43',
            'updated_at' => '2024-02-14 13:58:43',
        ]);
    }
}