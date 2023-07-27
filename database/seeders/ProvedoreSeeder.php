<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvedoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Proveedore::factory()->count(count:10)->create();*/
        DB::table('proveedores')->insert(values:[
            'name'=>'nameOne',
			'razon_social'=>'razonOne',
			'numero_proveedor'=>'1',
			'fecha_registro'=>'1990-01-01',
			'rfc'=>'1',
            'region_id'=>'1',
		    'logo'=>'logoOne',
        ]);
    }
}
