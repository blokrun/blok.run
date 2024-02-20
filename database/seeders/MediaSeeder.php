<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
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
         * artisan seed:generate Media
         *
         */

        
        $newData0 = \App\Models\Media::create([
            'id' => 3,
            'model_type' => 'App\\Models\\Product',
            'model_id' => 1,
            'uuid' => 'e13ef60a-ddf5-4f00-8e7b-e60a805e5bde',
            'collection_name' => 'images',
            'name' => 28763226500,
            'file_name' => '01HPV7QSASXBQ15XXDHNFCV0SD.webp',
            'mime_type' => 'image/webp',
            'disk' => 'public',
            'conversions_disk' => 'public',
            'size' => 454458,
            'manipulations' => '[]',
            'custom_properties' => '[]',
            'generated_conversions' => '[]',
            'responsive_images' => '[]',
            'order_column' => 1,
            'created_at' => '2024-02-17 09:53:09',
            'updated_at' => '2024-02-17 09:53:09',
        ]);
        $newData1 = \App\Models\Media::create([
            'id' => 4,
            'model_type' => 'App\\Models\\Product',
            'model_id' => 13,
            'uuid' => '2e838437-7f37-45d8-bce2-6721fb239705',
            'collection_name' => 'images',
            'name' => 'ss-black-front_1200x1200',
            'file_name' => '01HPV7RMYEJVCKEJEDBEDATQ11.webp',
            'mime_type' => 'image/webp',
            'disk' => 'public',
            'conversions_disk' => 'public',
            'size' => 28664,
            'manipulations' => '[]',
            'custom_properties' => '[]',
            'generated_conversions' => '[]',
            'responsive_images' => '[]',
            'order_column' => 1,
            'created_at' => '2024-02-17 09:53:37',
            'updated_at' => '2024-02-17 09:53:37',
        ]);
    }
}