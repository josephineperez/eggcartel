<?php

use Illuminate\Database\Seeder;

use App\Cheese;
use App\Item;

class CheeseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear out any old data if it exists
        DB::table('cheeses')->delete();

        $cheeses = [
            [
                'id' => 1,
                'name' => 'American',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 2,
                'name' => 'Swiss',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 3,
                'name' => 'Cheddar',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 4,
                'name' => 'Shredded',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 5,
                'name' => 'No Cheese',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ]

        ];

        foreach ($cheeses as $cheese_data) {
            
            $cheese = new Cheese();

            foreach ($cheese_data as $key => $value) {
                $cheese->{$key} = $value;
            }

            $cheese->save();
        }


        // lets add an cheese to an item

        $item = Item::first();
        $item->cheeses()->attach(1);





    }
}
