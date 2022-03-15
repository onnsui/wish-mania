<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class RegulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regulationData = [
            ['id' => 1, 'name' => 'F', 'label' => 'F'],
            ['id' => 2, 'name' => 'E', 'label' => 'E'],
            ['id' => 3, 'name' => 'D', 'label' => 'D'],
            ['id' => 4, 'name' => 'C', 'label' => 'C'],
            ['id' => 5, 'name' => 'B', 'label' => 'B'],
            ['id' => 6, 'name' => 'A', 'label' => 'A'],
            ['id' => 99, 'name' => 'other', 'label' => '区分なし'],
        ];

        foreach ($regulationData as $data) {
            DB::table('regulations')->updateOrInsert(
                ['id' => $data['id']],
                $data,
            );
        }
    }
}
