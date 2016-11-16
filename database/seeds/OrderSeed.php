<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Order;
use App\User;


class OrderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear out any old data if it exists
        DB::table('orders')->delete();

        $user = User::where('name', '=', 'Trevor Greenleaf')->first();

        Order::create([
            'user_id' => $user->id,
            'confirmed'=>0
        ]);
    }
}
