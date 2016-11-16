<?php

use Illuminate\Database\Seeder;

use App\Base;

class BaseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear out any old data if it exists
        DB::table('bases')->delete();


        $bases = [
            [
                'id' => 1,
                'name' => 'Burrito',
                'price' => 7,
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 2,
                'name' => 'Bowl',
                'price' => 6,
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 3,
                'name' => 'Sandwich',
                'price' => 5,
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ]

        ];

        foreach ($bases as $base_data) {
            
            $base = new Base();

            foreach ($base_data as $key => $value) {
                $base->{$key} = $value;
            }

            $base->save();
        }


    }
}
