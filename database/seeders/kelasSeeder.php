<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class kelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('kelas')->insert([
            'walikelas' => 'Gavyn Muhamad',
            'nmkelas' => 'XI RPL 2'
       ]);
    }
}
