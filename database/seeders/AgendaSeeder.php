<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agendatbs')->insert([
            'nmguru' => 'zain Malik',
            'materi' => 'figma',
            'mapel' => 'Dasar Desain Grafis',
            'jampel' => '10:20-12:00 pm',
            'nmkelas' => 'XI RPL 2',
            'tdkhadir' => 'nihil',
            'jenispel' => 'offline',
            'ket' => 'ya'

        ]);
    }
}
