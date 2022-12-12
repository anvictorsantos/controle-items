<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
	    	Item::create([
	            'title' => str_random(8),
	            'description' => str_random(20),
	        ]);
    	}
    }
}
