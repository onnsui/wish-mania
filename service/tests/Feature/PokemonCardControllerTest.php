<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class PokemonCardControllerTest extends TestCase
{
    public function setUp():void
    {
        parent::setUp();
    }

    /**
     * @test
     */
    public function ポケモンカードを登録できる()
    {
        $user = User::factory()->create();

        $params = [
            'id' => 1,
            'user_id' => $user->id,
            'name' => 'ピカチュウ',
            'expansion_mark_id' => 1,
            `regulation_id` => 1,
            `list_no` => 1,
            `rarity_id` => 1,
        ];

        $res = $this->postJson(route('pokemon-store'), $params);
        $res->assertStatus(200);

        $this->assertEquals($params['user_id'], $res['user_id']);
        $this->assertEquals($params['name'], $res['name']);
        $this->assertEquals($params['expansion_mark_id'], $res['expansion_mark_id']);
        $this->assertEquals($params['regulation_id'], $res['regulation_id']);
        $this->assertEquals($params['list_no'], $res['list_no']);
        $this->assertEquals($params['rarity_id'], $res['rarity_id']);
    }
}
