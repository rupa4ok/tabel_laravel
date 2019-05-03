<?php

use App\Models\Objects;
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
        $this->call(ObjectsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        factory(Objects::class, 50)->create();
    }
}
