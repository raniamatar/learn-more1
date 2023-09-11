<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory()->create([
            'name'=>'rania',
            'age'=>22,
            'email'=>'admin@admin',
            'password'=>Hash::make('123456789'),
        ]);
        // Category::factory(10)->create();
    }
}
