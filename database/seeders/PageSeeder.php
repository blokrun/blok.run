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
            'name' => 'About',
            'slug' => 'about',
            'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt ut magna sed fringilla. Aliquam pulvinar blandit nisi, vitae dignissim dui ornare in. Proin ex augue, mattis a tortor non, luctus auctor eros. Aliquam non auctor velit. Phasellus egestas ut nisi imperdiet efficitur. Ut eleifend sagittis felis ac eleifend. Phasellus blandit turpis vel mauris ornare tristique. Nulla vestibulum eleifend augue nec fringilla. Suspendisse accumsan nec arcu et faucibus. Quisque ac pellentesque augue. Nullam rutrum volutpat magna eu mattis. Nunc eleifend, velit eget tincidunt feugiat, velit erat vestibulum felis, ac commodo nunc nisi ac elit. Maecenas iaculis congue ex bibendum facilisis.</p>
<p>Vestibulum eu velit facilisis, aliquet lorem et, placerat velit. Maecenas tortor odio, suscipit ac cursus vitae, consectetur ut dui. Mauris tincidunt, metus sit amet consectetur dictum, est mauris pharetra odio, non blandit diam nulla in odio. Curabitur laoreet quis turpis id sollicitudin. Donec dui elit, condimentum a consequat et, congue at diam. Nunc malesuada, nisl a ullamcorper scelerisque, lacus neque volutpat mi, eget luctus velit mauris eu est. Maecenas quis vehicula enim, suscipit aliquet mi. Duis sit amet massa rutrum, malesuada urna vel, blandit sem. Curabitur facilisis massa quis fringilla placerat.</p>
<p>Morbi sed est nec est fringilla egestas. Curabitur porta nibh in commodo aliquam. Integer dapibus porttitor nunc quis bibendum. Fusce gravida nisl vitae congue auctor. Etiam commodo nulla mi, sit amet porta diam mattis vel. Duis ipsum magna, congue eget aliquet ac, tincidunt nec justo. Nulla at velit diam. Aenean in mollis dui. Vivamus ac eleifend quam. Vivamus ut nibh in sem molestie ornare. Nulla eget mauris aliquam, convallis dolor at, facilisis arcu. Nunc lectus lacus, vulputate quis felis id, pellentesque ornare ante.</p>',
            'is_active' => 1,
            'is_homepage' => 1,
            'category_id' => NULL,
            'language_id' => NULL,
            'created_at' => '2024-02-14 13:59:56',
            'updated_at' => '2024-02-19 10:31:53',
            'description' => NULL,
            'logo_url' => NULL,
            'website_url' => NULL,
        ]);
    }
}