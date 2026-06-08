<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'ad@min',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gfY9m7CBLLrakb4lWBeJye5shQ8bANFt1dnbgcUhyuSbXcyXRj70C',
                'remember_token' => NULL,
                'created_at' => '2020-02-10 20:13:24',
                'updated_at' => '2020-02-10 20:13:24',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Christine Gallo',
                'email' => 'christine@yahoo.fr',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qOIPUKNlpfAqmgMy1PIKSe6.9tSkcxHw6VAKQpOS2lf9yyEBBPlPa',
                'remember_token' => NULL,
                'created_at' => '2020-02-10 12:15:45',
                'updated_at' => '2020-02-10 12:15:45',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Christine Z',
                'email' => 'c@z',
                'email_verified_at' => NULL,
                'password' => '$2y$10$L1jCbHdA4.Tn/8a4AVaxEONwjMepYCSLOw55bMjHIIv6Suni2Dx9G',
                'remember_token' => NULL,
                'created_at' => '2023-01-10 18:19:32',
                'updated_at' => '2023-01-10 18:19:32',
            ),
        ));
        
        
    }
}