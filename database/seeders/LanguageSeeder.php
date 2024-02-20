<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
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
         * artisan seed:generate Language
         *
         */

        
        $newData0 = \App\Models\Language::create([
            'id' => 1,
            'name' => 'Engish',
            'created_at' => '2024-02-14 13:34:55',
            'updated_at' => '2024-02-14 13:44:36',
            'code' => 'en',
            'slug' => 'english',
            'position_nb' => 0,
            'is_active' => 1,
            'is_default' => 1,
        ]);
        $newData1 = \App\Models\Language::create([
            'id' => 2,
            'name' => 'Lietuviškai',
            'created_at' => '2024-02-14 13:46:13',
            'updated_at' => '2024-02-14 13:46:13',
            'code' => 'lt',
            'slug' => 'lietuviskai',
            'position_nb' => 0,
            'is_active' => 1,
            'is_default' => 0,
        ]);
    }
}