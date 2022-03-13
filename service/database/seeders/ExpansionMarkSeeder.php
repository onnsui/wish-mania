<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ExpansionMarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // https://pokemon-card-fullahead.com/shopbrand/xy-p
        // 左のメニューから抜き出した
        // ソード&シールドまでやった
        $expansionMarkData = [
            [
                'id' => 1,
                'name' => 'S9',
                'label' => 'スターバース'
            ],
            [
                'id' => 2,
                'name' => 'S8a',
                'label' => '25thANNIVERSARY COLLECTION'
            ],
            [
                'id' => 3,
                'name' => 'S8',
                'label' => 'フュージョンアーツ'
            ],
            [
                'id' => 4,
                'name' => 'S7R',
                'label' => '蒼空ストリーム'
            ],
            [
                'id' => 5,
                'name' => 'S7D',
                'label' => '摩天パーフェクト'
            ],
            [
                'id' => 6,
                'name' => 'S6K',
                'label' => '漆黒のガイスト'
            ],
            [
                'id' => 7,
                'name' => 'S6H',
                'label' => '白銀のランス'
            ],
            [
                'id' => 8,
                'name' => 'S5R',
                'label' => '連撃マスター'
            ],
            [
                'id' => 9,
                'name' => 'S5I',
                'label' => '一撃マスター'
            ],
            [
                'id' => 10,
                'name' => 'S4',
                'label' => '仰天のボルテッカー'
            ],
            [
                'id' => 11,
                'name' => 'S3',
                'label' => 'ムゲンゾーン'
            ],
            [
                'id' => 12,
                'name' => 'S2',
                'label' => '反逆クラッシュ'
            ],
            [
                'id' => 13,
                'name' => 'S1H',
                'label' => 'シールド'
            ],
            [
                'id' => 14,
                'name' => 'S1W',
                'label' => 'ソード'
            ],
            ['id' => 15,'name' => 'S9a', 'label'=> 'バトルリージョン'],
            ['id' => 16,'name' => 'S6a', 'label'=> 'イーブイヒーローズ'],
            ['id' => 17,'name' => 'S5a', 'label'=> '双璧のファイター'],
            ['id' => 18,'name' => 'S3a', 'label'=> '伝説の鼓動'],
            ['id' => 19,'name' => 'S2a', 'label'=> '爆炎ウォーカー'],
            ['id' => 20,'name' => 'S1a', 'label'=> 'VMAXライジング'],
            ['id' => 21,'name' => 'S8b', 'label' =>  'ハイクラスパック VMAXクライマックス'],
            ['id' => 22,'name' => 'S4a', 'label' =>  'ハイクラスパック シャイニースターV'],
            ['id' => 23,'name' => 'SLD', 'label' =>  'スターターセットVSTAR ダークライ'],
            ['id' => 24,'name' => 'SLL', 'label' =>  'スターターセットVSTAR ルカリオ'],
            ['id' => 25,'name' => 'SJ', 'label' =>  'ザシアン・ザマゼンタ vs ムゲンダイナ'],
            ['id' => 26,'name' => 'SI', 'label' =>  'スタートデッキ100'],
            ['id' => 27,'name' => 'SH', 'label' =>  'ファミリーポケモンカードゲーム'],
            ['id' => 28,'name' => 'SGI', 'label' =>  'ハイクラスデッキ インテレオンVMAX'],
            ['id' => 29,'name' => 'SGG', 'label' =>  'ハイクラスデッキ ゲンガーVMAX'],
            ['id' => 30,'name' => 'SC2', 'label' =>  'スターターセットVMAX リザードン'],
            ['id' => 31,'name' => 'SEK', 'label' =>  'スターターセットVMAX カメックス'],
            ['id' => 32,'name' => 'SEF', 'label' =>  'スターターセットVMAX フシギバナ'],
            ['id' => 33,'name' => 'SD', 'label' =>  'Vスタートデッキ'],
            ['id' => 34,'name' => 'SC', 'label' =>  'スターターセットVMAX リザードン/オーロンゲ'],
            ['id' => 35,'name' => 'SA', 'label' =>  'スターターセットV 草/炎/水/雷/闘'],
            ['id' => 36,'name' => 'SK', 'label' =>  'プレミアムトレーナーボックス VSTAR'],
            ['id' => 37,'name' => 'SP5', 'label' =>  'スペシャルカードセット V-UNION'],
            ['id' => 38,'name' => 'SP4', 'label' =>  'VMAXスペシャルセット イーブイヒーローズ'],
            ['id' => 39,'name' => 'SP3', 'label' =>  'ジャンボパックセット'],
            ['id' => 40,'name' => 'SF', 'label' =>  'プレミアムトレーナーボックス ICHIGEKI/RENGEKI'],
            ['id' => 41,'name' => 'SP2', 'label' =>  'VMAXスペシャルセット'],
            ['id' => 42,'name' => 'SP1', 'label' =>  'ザシアン＋ザマゼンタBOX'],
            ['id' => 43,'name' => 'SB', 'label' =>  'プレミアムトレーナーボックス ソード＆シールド'],
            ['id' => 44,'name' => 'S8a-P', 'label' => 'プロモカードパック 25th ANNIVERSARY edition'],
        ];

        foreach($expansionMarkData as $data) {
            DB::table('expansion_marks')->updateOrInsert(
                ['id' => $data['id']],
                $data,
            );
        }
    
    }
}
