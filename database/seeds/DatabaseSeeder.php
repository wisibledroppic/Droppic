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
        $this->call(PickerCategoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DroppersTableSeeder::class);
        $this->call(PickersTableSeeder::class);
    }
}
