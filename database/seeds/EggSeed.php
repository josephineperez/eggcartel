<?php

use Illuminate\Database\Seeder;

use App\Egg;
use App\Item;

class EggSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear out any old data if it exists
        DB::table('eggs')->delete();

        $eggs = [
            [
                'id' => 1,
                'style' => 'Scrambled',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 2,
                'style' => 'Fried',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 3,
                'style' => 'Boiled',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 4,
                'style' => 'Sunny',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 5,
                'style' => 'No Eggs',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ]

        ];

        foreach ($eggs as $egg_data) {
            
            $egg = new Egg();

            foreach ($egg_data as $key => $value) {
                $egg->{$key} = $value;
            }

            $egg->save();
        }


        // lets add an egg to an item

        $item = Item::first();
        $item->eggs()->attach(1);





    }
}
