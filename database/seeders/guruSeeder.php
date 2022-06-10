<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class guruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('gurus')->insert([
           'nmguru' => 'Gavyn Muhamad',
            'nikguru' => '34543243001',
            'mapel' => 'Matematika',
            'usguru' => 'gavynmuhamad',
            'pwguru' => '12345678',
            
       ]);
    }
}
