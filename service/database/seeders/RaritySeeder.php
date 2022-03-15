<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class RaritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rarityData = [
            [
                'id' => 1,
                'name' => 'UR',
                'label' => 'ウルトラレア'
            ],
            [
                'id' => 2,
                'name' => 'HR',
                'label' => 'ハイパーレア'
            ],
            [
                'id' => 3,
                'name' => 'SR',
                'label' => 'スーパーレア'
            ],
            [
                'id' => 4,
                'name' => 'RRR',
                'label' => 'トリプルレア'
            ],
            [
                'id' => 5,
                'name' => 'RR',
                'label' => 'ダブルレア'
            ],
            [
                'id' => 6,
                'name' => 'R',
                'label' => 'レア'
            ],
            [
                'id' => 7,
                'name' => 'U',
                'label' => 'アンコモン'
            ],
            [
                'id' => 8,
                'name' => 'C',
                'label' => 'コモン'
            ],
            [
                'id' => 9,
                'name' => 'CSR',
                'label' => 'キャラクタースーパーレア'
            ],
            [
                'id' => 10,
                'name' => 'CHR',
                'label' => 'キャラクターレア'
            ],
            [
                'id' => 11,
                'name' => 'S',
                'label' => '色違い'
            ],
            [
                'id' => 12,
                'name' => 'SSR',
                'label' => 'エスエスアール'
            ],
            [
                'id' => 13,
                'name' => 'A',
                'label' => 'アメイジングレア'
            ],
            [
                'id' => 14,
                'name' => 'TR',
                'label' => 'トレーナーズレア'
            ],
            [
                'id' => 15,
                'name' => 'PROMO',
                'label' => 'プロモ'
            ],
        ];

        foreach ($rarityData as $data) {
            DB::table('rarities')->updateOrInsert(
                ['id' => $data['id']],
                $data,
            );
        }
    }
}
