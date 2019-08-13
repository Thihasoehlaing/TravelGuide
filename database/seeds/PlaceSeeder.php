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
                'city'          => 'Yangon',
                'fileimage'     =>  '',
                'township'      => 'San Chaung',
                'type'          => 'Pagoda',
                'note'          =>  'Shwedagon Pagoda is the most well-known pagoda in Myanmar.',
                'lat'           =>  '1234',
                'long'          =>  '6757867',
            ]
        ]);
    }
}
