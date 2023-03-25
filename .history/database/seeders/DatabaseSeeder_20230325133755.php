<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory()->create([
             'name' => 'Fred452',
             'email' => 'admin@admin.com',
            'password' => bcrypt(value: 'abcd1234')
         ]);

        \App\Models\User::factory(10)->create();
        \App\Models\Property::factory(50)->create();
    }
}
