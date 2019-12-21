<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrador')->insert([
            'id_usuario' 	    =>	1,
            'cedula'	        =>  '1088008382',
            'nombre'	        =>  'Carlos Eduardo Hincapie Hidalgo',
            'direccion'         =>  'Calle 20 c',
            'celular'           =>  '3115455293',
        ]);
    }
}
