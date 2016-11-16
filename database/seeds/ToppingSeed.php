<?php

use Illuminate\Database\Seeder;

use App\Topping;
use App\Item;

class ToppingSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear out any old data if it exists
        DB::table('toppings')->delete();

        $toppings = [
            [
                'id' => 1,
                'name' => 'Hash Browns',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 2,
                'name' => 'Potatoes',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 3,
                'name' => 'Black Beans',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 4,
                'name' => 'Refried Beans',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 5,
                'name' => 'White Rice',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 6,
                'name' => 'Brown Rice',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 7,
                'name' => 'Onions',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 8,
                'name' => 'Mushrooms',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 9,
                'name' => 'Veggies',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 10,
                'name' => 'Tomato',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 11,
                'name' => 'Corn',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 12,
                'name' => 'Spinach',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 13,
                'name' => 'Arugula',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 14,
                'name' => 'Lettuce',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ]

        ];

        foreach ($toppings as $topping_data) {
            
            $topping = new Topping();

            foreach ($topping_data as $key => $value) {
                $topping->{$key} = $value;
            }

            $topping->save();
        }


        // lets add an cheese to an item

        $item = Item::first();
        $item->toppings()->attach(1);





    }
}
