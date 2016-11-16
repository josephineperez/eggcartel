<?php

use Illuminate\Database\Seeder;

use App\Meat;
use App\Item;

class MeatSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear out any old data if it exists
        DB::table('meats')->delete();

        $meats = [
            [
                'id' => 1,
                'name' => 'Sausage',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 2,
                'name' => 'Bacon',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 3,
                'name' => 'Ham',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 4,
                'name' => 'Turkey Bacon',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 5,
                'name' => 'Veggie Sausage',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 6,
                'name' => 'No Meat',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ]

        ];

        foreach ($meats as $meat_data) {
            
            $meat = new Meat();

            foreach ($meat_data as $key => $value) {
                $meat->{$key} = $value;
            }

            $meat->save();
        }


        // lets add an cheese to an item

        $item = Item::first();
        $item->meats()->attach(1);





    }
}
