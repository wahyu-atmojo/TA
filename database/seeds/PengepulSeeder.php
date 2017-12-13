<?php

use Illuminate\Database\Seeder;

class PengepulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengepuls')->insert(
        	[ 
        	'id_pengepul' => '1',
        	'nama_pengepul' => 'Suyanto';
        	'id_desa' => '1',
        	'longitude' => '0,970877965',
        	'latitude' => '0,86546877',
        	'deskripsi' => 'Tenang',
        	'foto' => 'poto.jpg']
        	);
    }
}
