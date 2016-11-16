<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // seed those uses
        $this->call(UserSeed::class);
        $this->call(OrderSeed::class);
        
        $this->call(BaseSeed::class);
        
        $this->call(ItemSeed::class);
        $this->call(EggSeed::class);
        $this->call(CheeseSeed::class);
        $this->call(MeatSeed::class);
        $this->call(ToppingSeed::class);
 

    }
}
