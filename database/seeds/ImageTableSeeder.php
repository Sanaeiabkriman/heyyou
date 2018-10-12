<?php

use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('presentations')->insert([
            [
                "titre" => "titre",
                "description" => "mqsldkfjmqslk",
                "image" => "images/css.jpeg"
            ],

        ]);
    }
}
