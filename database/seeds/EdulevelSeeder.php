<?php

use Illuminate\Database\Seeder;

class EdulevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('edulevels')->insert([
            'nama' => 'SD Sederajat',
            'Desc' => 'SD/MI',
        ]);
        
    }
}
