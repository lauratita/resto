<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Menu;
use App\Models\User;
use App\Models\Order;
use App\Models\Gallery;
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
                User::factory(5)->create();
                Blog::factory(5)->create();
                Order::factory(10)->create();
                Gallery::factory(5)->create();
                Menu::factory(5)->create();

                // \App\Models\User::factory()->create([
                //     'name' => 'Test User',
                //     'email' => 'test@example.com',
                // ]);
        }
}
