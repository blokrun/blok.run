<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
         * artisan seed:generate User
         *
         */

        
        $newData0 = \App\Models\User::create([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'blok@blok.run',
            'email_verified_at' => '2024-02-14 10:53:53',
            'password' => bcrypt('blok'),
            'remember_token' => 'STnBH7oER0GwmNVUD108Ovd1z3Ij1yt1wC3fZLfo2mKhXEXShOMyQqzrmG2c',
            'created_at' => '2024-02-14 10:53:53',
            'updated_at' => '2024-02-14 10:53:53',
        ]);
    }
}