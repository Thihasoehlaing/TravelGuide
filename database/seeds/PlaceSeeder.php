<?php

use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
            [
                'division_id'   => '',
                'placename'     => 'Shwedagon Pagoda',
                'City'          => 'Yangon',
                'township'      => 'San Chaung',
                'type'          => 'Pagoda',
                'mark'          =>  'Shwedagon Pagoda is the most well-known pagoda in Myanmar.'
            ]
        ]);
    }
}
