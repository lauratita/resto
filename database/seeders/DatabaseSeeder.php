<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
<<<<<<< HEAD

use App\Models\Gallery;
=======
use App\Models\Menu;
>>>>>>> 4f8b46726780c12c76d30ca0f908398be210b7f6
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        User::factory(5)->create();
        Gallery::factory(5)->create();
=======
        User::factory(10)->create();
        Menu::factory(10)->create();
>>>>>>> 4f8b46726780c12c76d30ca0f908398be210b7f6

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}