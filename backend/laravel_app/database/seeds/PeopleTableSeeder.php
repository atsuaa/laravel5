<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'mail' => 'taro@g.com',
            'age' => '34'
        ];
        DB::table('people')->insert($param);
        $param = [
            'name' => 'jiro',
            'mail' => 'jiro@g.com',
            'age' => '45'
        ];
        DB::table('people')->insert($param);
        $param = [
            'name' => 'hana',
            'mail' => 'hana@g.com',
            'age' => '56'
        ];
        DB::table('people')->insert($param);
    }
}
