<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Registro;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RegistrosExport implements FromCollection, WithHeadings
{
    protected $registros;

    public function __construct($registros)
    {
        $this->registros = $registros;
    }

    public function collection()
    {
        $data = $this->registros->map(function ($registro) {
            $registro->type_exam = unserialize($registro->type_exam);
            return $registro;
        });

        return $data;
    }

    public function headings(): array
    {
        // Ajusta los nombres de las columnas según tus necesidades
        return [
            'id',
            'código externo',
            'tipo examen',
            'anticuagulante',
            'código interno',
            'tipo de muestra',
            'fecha examen',
            'hora examen',
            'fecha entrega',
            'Fecha de recepción de la muestra',
            'Hora de recepción de la muestra',
            'Temperatura paciente',
            'Diagnostico',
            'Procedencia de la muestra',
            'Fecha nacimiento',
            'Dias de toma'
            // ... otras columnas
        ];
    }
}
