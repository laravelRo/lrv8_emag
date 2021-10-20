<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
<<<<<<< Updated upstream
=======
use Database\Seeders\StaffSeeder;
use Database\Seeders\SectionSeeder;

>>>>>>> Stashed changes

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
<<<<<<< Updated upstream
            UserSeeder::class,
=======
            // UserSeeder::class,
            // StaffSeeder::class,
            SectionSeeder::class,
>>>>>>> Stashed changes

        ]);
    }
}
