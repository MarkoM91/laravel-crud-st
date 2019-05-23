<?php

use Illuminate\Database\Seeder;

class SmartphoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Smartphone::class, 10)->create();
    }
}
