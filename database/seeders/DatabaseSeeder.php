<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Items;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        User::create([
            'name' => 'Muhammad Syafwan Ardiansyah',
            'username' => 'syafwan000',
            'email' => 'muhammadsyafwan04@gmail.com',
            'password' => bcrypt(12345)
        ]);

        Category::create([
            'name' => 'ATK'
        ]);

        Category::create([
            'name' => 'Elektronik'
        ]);

        Items::factory(20)->create();
    }
}
