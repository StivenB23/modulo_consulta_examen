<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nombres = [
            "AM PM 24 SAS",
            "BIOCLINICO DEL SUR S.A.S.",
            "BIOTECNOLOGIA Y GENETICA SA BIOTECGEN SA",
            "CAMINOS IPS S.A.S",
            "CENTRO MEDICO ECOMEDICA E.U.",
            "CLINICA LA ASUNCION",
            "CLINICA SALUD CENTER S.A.S.",
            "CLINICA SAN MARTIN BARRANQUILLA LTDA",
            "CLINICA SANAR S.A.S.",
            "FISYQUIMICA LTDA",
            "FUNDACION GRUPO ESTUDIO BARRANQUILLA",
            "GALENOS S.S.T & LABORATORIO CLINICO IPS S.A.S",
            "GENLAB GENETIC LABORATORY S.A.S",
            "GENOMICS S.A.S",
            "GRUPO AVA LABZELL LIMITADA",
            "HOSPITAL CARDIOVASCULAR DE CUNDINAMARCA S A",
            "IMPORTQ SAS",
            "INSTITUTO DE DIAGNOSTICO MEDICO S.A.",
            "IPS MEDIC-GINEBRA S.A.S",
            "LAB DEL LLANO S.A.S",
            "LABORATORIO CLINICO CENTRAL LIMITADA",
            "LABORATORIO CLINICO CONTINENTAL S.A.S.",
            "LABORATORIO CLINICO ESPECIALIZADO UNIBAC SAS",
            "LABORATORIO CLINICO GARCIA BELTRAN GB LAB",
            "LABORATORIO CLINICO P Y P PALMIRA SAS",
            "LABORATORIO CLINICO PATRICIA MERCHAN",
            "LABORATORIO CLINICO SANTA LUCIA IPS S.A.S.",
            "LABORATORIO CLINICO VIVIAN RAMIREZ I.P.S. S.A.S.",
            "LABORATORIO LORENA VEJARANO S.A.S.",
            "LABORATORIOS NANCY FLOREZ GARCIA S.A.S.",
            "LABORATORIO LICETH MARGARITA CAMACHO REBOLLEDO",
            "Mabel Otero",
            "MARGIE OJEDA ANAYA",
            "MARTHA MIREYA MARTIN HERRERA",
            "MEDILAB LC S.A.S.",
            "OBSTETRICIA & GINECOLOGIA S.A.S.",
            "SCIRE CLINICAL DIAGNOSIS S.A.S",
            "SOCIEDAD DE CIRUGIA DE BOGOTA HOSPITAL DE SAN JOSE",
            "SOLAB SAS",
            "SPECIALTY LABORATORIES SAS",
            "SUSANA VARGAS CADENA",
            "UNIDAD DE FERTILIDAD DEL TOLIMA S.A.S. - UNIFERTIL S.A.S",
            "WAATA-PIAKAO SAS",
            "PARTICULAR"
        ];
        
        foreach ($nombres as $nombre) {
            DB::table('companies')->insert([
                'name' => $nombre,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
