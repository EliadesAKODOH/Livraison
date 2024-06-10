<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash; 

use App\Models\User;
use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $precieuse = User::create([
         'nom'=>'Precious',
          'email'=>'precious@gmail.com',
          'adresse'=>'Amerique',
          'telephone'=>'95555555',
          'password'=>Hash::make('password'),
        ]);
        $aureano = User::create([
            'nom'=>'Auréano',
             'email'=>'aure@gmail.com',
             'adresse'=>'Paris',
             'telephone'=>'95555556',
             'password'=>Hash::make('password'),
           ]);
           $janvier = User::create([
            'nom'=>'Janvier',
             'email'=>'janvier@gmail.com',
             'adresse'=>'New York',
             'telephone'=>'95401515',
             'password'=>Hash::make('password'),
           ]);

           Role::create([
           'name'=>'admin'
           ]);
           Role::create([
            'name'=>'client'
            ]);
            Role::create([
                'name'=>'livreur'
                ]);
            
            $precieuse->roles()->attach([1]);
            
            $janvier->roles()->attach([2,3]);
            $aureano->roles()->attach([2]);
    }
}
