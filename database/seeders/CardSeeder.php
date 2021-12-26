<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 8; $i++) {
            Card::factory()->create(['desk_list_id' => $i]);
        }

        for ($i = 1; $i <= 6; $i++) {
            Card::factory()->create(['desk_list_id' => $i]);
        }

        for ($i = 1; $i <= 3; $i++) {
            Card::factory()->create(['desk_list_id' => $i]);
        }

    }
}
