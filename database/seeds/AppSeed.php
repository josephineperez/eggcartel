<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

Use App\Board;
Use App\Unit;
Use App\User;


class AppSeed extends Seeder
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
        DB::table('toppings')->delete();
        DB::table('bases')->delete();
        DB::table('cheeses')->delete();
        DB::table('meats')->delete();
        DB::table('items')->delete();
        DB::table('orders')->delete();

        $user = User::where('name', '=', 'Trevor Greenleaf')->first();


        $data = [
            [
                'id' => 1,
                'name' => 'Sample',
                'user_id' => $user->id,
                'description' => 'This is a sample mood board',
                'thumbnail' => '',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
        ];

        foreach ($data as $item) {
            
            $board = new Board();
            foreach ($item as $key => $value) {
                $board->{$key} = $value;
            }
            $board->save();

            // create 10 units
            for ($i=0; $i < 3 ; $i++) { 
                $unit = new Unit;
                $unit->bg_color = 'red';
                $unit->row = 1;
                $unit->col = 2;
                $unit->size_x = 1;
                $unit->size_y = 1;
                $unit->original_image = 'sample_image.png';
                $unit->original_image_width = 200;
                $unit->image = 'sample_image.png';
                $unit->image_width = 600;
                $unit->image_top = 40;
                $unit->image_left = 50;
                $unit->board_id = $board->id;
                $unit->save();
            }
        }


    }
}
