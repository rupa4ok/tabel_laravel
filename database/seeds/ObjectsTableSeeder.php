<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('objects')->insert([
            'name' => str_random(10),
            'year' => 2019,
            'mounth' => 04,
            'status' => 1,
            'users_id' => 101
        ]);
    }
}