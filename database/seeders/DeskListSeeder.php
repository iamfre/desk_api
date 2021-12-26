<?php

namespace Database\Seeders;

use App\Models\DeskList;
use Illuminate\Database\Seeder;

class DeskListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++) {
            DeskList::factory()->create(['name' => 'Do', 'desk_id' => $i]);
            DeskList::factory()->create(['name' => 'Doing', 'desk_id' => $i]);
            DeskList::factory()->create(['name' => 'Done', 'desk_id' => $i]);
        }
    }
}
