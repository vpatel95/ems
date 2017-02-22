<?php

use Illuminate\Database\Seeder;

class HodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Hod::class, 10)->create();
    }
}
