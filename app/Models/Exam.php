<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'external_code',
        'type_exam',
        'sample_type',
        'exam_date',
        'exam_hour',
        'sample_receipt_date',
        'sample_receipt_hour',
        'patient_temperature',
        'diagnostic',
        'deliver_date',
        'birth_date',
        'origin_sample',
        'document',
        'taking_days',
    ];
    public function patients()
    {
        return $this->belongsToMany(User::class);
    }
}
