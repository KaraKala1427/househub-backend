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
        $this->call([
            UserStatusSeeder::class,
            RoleSeeder::class,
            ContactInformationTypeSeeder::class,
            AuthCodeTypesSeeder::class,
            NotificatorTypeSeeder::class,
            NotificatorSeeder::class,
            TokenTypeSeeder::class,
        ]);
    }
}
