<?php

use Illuminate\Database\Seeder;

use App\Item;
use App\Order;

class ItemSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear out any old data if it exists
        DB::table('items')->delete();

        $order = Order::first();

        $items = [
            [
                'id' => 1,
                'order_id' => $order->id,
                'for_person' => 'Jo',
                'base_id' => 1,
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 2,
                'order_id' => $order->id,
                'for_person' => 'Marco',
                'base_id' => 2,
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 3,
                'order_id' => $order->id,
                'for_person' => 'Austin',
                'base_id' => 3,
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
        ];

        foreach ($items as $item_data) {
            
            $item = new Item();

            foreach ($item_data as $key => $value) {
                $item->{$key} = $value;
            }

            $item->save();
        }
    }
}
