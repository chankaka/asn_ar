<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//Spatie
use Spatie\Permission\Models\Permission;
class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
        //Operaciones sobre tabla Roles
        'ver-rol','crear-rol','editar-rol','borrar-rol',
        //Operaciones sobre tabla Agenda
        'ver-agenda','crear-agenda','editar-agenda','borrar-agenda',
        //Operaciones sobre tabla hora_agenda
        'ver-hora','crear-hora','editar-hora','borrar-hora',
        //Operaciones sobre tabla turno
        'ver-turno','crear-turno','editar-turno','borrar-turno',
        //Operaciones sore tabla plan
        'ver-plan','crear-plan','editar-plan','borrar-plan',
        //Operaciones sobre tabla proveedores
        'ver-proveedor','crear-proveedor','editar-proveedor','borrar-proveedor',

        ];

        foreach($permisos as $permiso)
            Permission::create(['name'=>$permiso]);
    }
}
