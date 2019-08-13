<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('placetypes')->insert([
            [
                'name'  =>  'Pagoda',
            ],

            [
                'name'  =>  'Beach',
            ],

            [
                'name'  =>  'Resort',
            ],

            [
                'name'  =>  'Some Awesome Places',
            ],
        ]);
    }
}
