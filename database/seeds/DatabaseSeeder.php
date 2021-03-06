<?php

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
        // $this->call(UserSeeder::class);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $this->call(CategorySeeder::class);
        $this->call(GameSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
    }
}
