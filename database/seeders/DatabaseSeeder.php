<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\Supermarche;
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



        $admin =  Role::create([
          'name'=>'admin'
          ]);
         $client =  Role::create([
           'name'=>'client'
           ]);
         $livreur =  Role::create([
               'name'=>'livreur'
               ]);
         $supermarche =  Role::create([
               'name'=>'supermarche'
               ]);


        $precieuse = User::create([
         'nom'=>'Precious',
          'email'=>'precious@gmail.com',
          'adresse'=>'Amerique',
          'telephone'=>'95555555',
          'password'=>Hash::make('password'),
          'role_id'=> 1,
          'supermarche_id' => 1
        ]);
        $aureano = User::create([
            'nom'=>'Auréano',
             'email'=>'aure@gmail.com',
             'adresse'=>'Paris',
             'telephone'=>'95555556',
             'password'=>Hash::make('password'),
             'role_id'=> 2,
             'supermarche_id' => 1
           ]);
           $janvier = User::create([
            'nom'=>'Janvier',
             'email'=>'janvier@gmail.com',
             'adresse'=>'New York',
             'telephone'=>'95401515',
             'password'=>Hash::make('password'),
             'role_id'=> 3,
             'supermarche_id' => 1
           ]);
           $miracle = User::create([
            'nom'=>'Miracle',
             'email'=>'miracle@gmail.com',
             'adresse'=>'Mexique',
             'telephone'=>'41188804',
             'password'=>Hash::make('password'),
             'role_id'=> 4,
             'supermarche_id' => 1
           ]);



    }
}
