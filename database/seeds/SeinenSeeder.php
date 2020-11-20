<?php

use Illuminate\Database\Seeder;

class SeinenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seinens')->insert([
				'username' => '是津りんたろー',
				'userid' => 2,
				'old' => '18',
				'wantold' => '40',
				'area' => '東京都',
				'description' => '淑女にめちゃくちゃされたいっす！！！！！！ twitter: zetsurintaro_',
			]);
    }
}
