<?php

namespace Database\Seeders;

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
        \DB::table('users')->insert([
            'name' => 'Bao Van',
            'email' => 'phubaovan96@gmail.com',
            'email_verified_at' => now(),
            'password' => \Hash::make('12354678'),
            // 'is_admin' => 0,
            'remember_token' => \Str::random(10),
        ]);
    }
}
