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
            'id' => 4,
            'parent_id' => NULL,
            'language_id' => 1,
            'product_category_id' => 1,
            'name' => 'Olej Zywokostowy',
            'slug' => 'olej-zywokostowy',
            'description' => 'dfgh',
            'text' => 'fghd',
            'is_active' => 1,
            'price' => '20.56',
            'discount_percentage' => 10,
            'created_at' => '2024-02-14 14:37:42',
            'updated_at' => '2024-02-14 14:44:50',
        ]);
    }
}