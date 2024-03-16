<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Estudiante;
use App\Models\Lapso;
use App\Models\Profesor;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            HistoriaStatusSeeder::class
        ]);

        // user admin
        User::create([
            'email' => 'admin@ugma.com',
            'name' => 'admin',
            'password' => 'admin',
            'role_id' => 0
        ]);

        $lapso = Lapso::create([
            'ano' => 2024,
            'periodo' => 1,
            'codigo' => '2024T1'
        ]);

//        $user = User::create([
//            'email' => 'username1@example.com',
//            'name' => 'username1',
//            'password' => 'username1',
//            'role_id' => 3
//        ]);
//
//        Estudiante::create([
//            'user_id' => $user->id,
//            'cedula' => 'V30987654',
//            'nombre' => 'user',
//            'apellido' => 'name',
//            'lapso_id' => $lapso->id
//        ]);

        \App\Models\User::factory()->state([
            'email' => 'username1@example.com',
            'name' => 'username1',
            'password' => 'username1',
            'role_id' => 3
        ])->has(\App\Models\Estudiante::factory()->state([
            'cedula' => 'V30987654',
            'nombre' => 'user',
            'apellido' => 'name',
        ])->has(\App\Models\Historia::factory()->hasPaciente()->hasAntecedentesMedicosPersonales()->hasAntecedentesMedicosFamiliares()->hasMedicamento()->hasHistoriaOdontologica()->hasExamenRadiografico()->hasPeriodontograma()->
        hasEstudioModelos()->hasMaxilarSuperior()->hasMaxilarInferior()->hasModelosOclusion()->hasPlanTratamiento()->hasModificacionesPlanTratamiento()->hasSecuenciaTratamiento()->hasPresupuesto()->hasHistoriaPeriodontal()->hasHigieneBucal()->hasControlHigieneBucal()->
        hasFichaEndodontica()->hasPruebasDiagnosticas()->hasRadiografias()->count(5)))->create();

        $user = User::create([
            'email' => 'username2@example.com',
            'name' => 'username2',
            'password' => 'username2',
            'role_id' => 2
        ]);

        Profesor::create([
            'user_id' => $user->id,
            'cedula' => 'V30987655',
            'nombre' => 'Ricardo',
            'apellido' => 'Gómez',
        ]);

//        User::factory()->hasEstudiante()->count(20)->create();

        \App\Models\User::factory()->has(\App\Models\Estudiante::factory()->has(\App\Models\Historia::factory()->hasPaciente()->hasAntecedentesMedicosPersonales()->hasAntecedentesMedicosFamiliares()->hasMedicamento()->hasHistoriaOdontologica()->hasExamenRadiografico()->hasPeriodontograma()->
        hasEstudioModelos()->hasMaxilarSuperior()->hasMaxilarInferior()->hasModelosOclusion()->hasPlanTratamiento()->hasModificacionesPlanTratamiento()->hasSecuenciaTratamiento()->hasPresupuesto()->hasHistoriaPeriodontal()->hasHigieneBucal()->hasControlHigieneBucal()->
            hasFichaEndodontica()->hasPruebasDiagnosticas()->hasRadiografias()
            ->count(2)))->count(20)->create();
    }
}
