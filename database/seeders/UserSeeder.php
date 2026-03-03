<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => "Sukhrob",
            'email' => "gmail@sukhrob.com",
            'password' => Hash::make('secret')
        ]);

        /* User::factory(10)->create();
        User::factory()->create([
            'email' => "over@ride.com"
        ]); */
    }
}