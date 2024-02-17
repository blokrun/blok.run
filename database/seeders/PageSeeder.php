<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
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
         * artisan seed:generate Page
         *
         */

        
        $newData0 = \App\Models\Page::create([
            'id' => 1,
            'name' => 'Pirkimo sąlygos',
            'slug' => 'pirkimo-salygos',
            'text' => NULL,
            'is_active' => NULL,
            'category_id' => NULL,
            'language_id' => NULL,
            'created_at' => '2024-02-14 13:59:56',
            'updated_at' => '2024-02-14 13:59:56',
            'description' => NULL,
            'logo_url' => NULL,
            'website_url' => NULL,
        ]);
    }
}